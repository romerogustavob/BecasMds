<?php

namespace BecasMds\BecaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrapView;

use BecasMds\BecaBundle\Entity\BecadoBeca;
use BecasMds\BecaBundle\Form\BecadoBecaType;
use BecasMds\BecaBundle\Form\BecadoBecaFilterType;

/**
 * BecadoBeca controller.
 *
 */
class BecadoBecaController extends Controller
{
    /**
     * Lists all BecadoBeca entities.
     *
     */
    public function indexAction()
    {
        list($filterForm, $queryBuilder) = $this->filter();

        list($entities, $pagerHtml) = $this->paginator($queryBuilder);

        return $this->render('BecaBundle:BecadoBeca:index.html.twig', array(
            'entities' => $entities,
            'pagerHtml' => $pagerHtml,
            'filterForm' => $filterForm->createView(),
        ));
    }

    /**
    * Create filter form and process filter request.
    *
    */
    protected function filter()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        $filterForm = $this->createForm(new BecadoBecaFilterType());
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('BecaBundle:BecadoBeca')->createQueryBuilder('e');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('BecadoBecaControllerFilter');
        }

        // Filter action
        if ($request->get('filter_action') == 'filter') {
            // Bind values from the request
            $filterForm->bind($request);

            if ($filterForm->isValid()) {
                // Build the query from the given form object
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
                // Save filter to session
                $filterData = $filterForm->getData();
                $session->set('BecadoBecaControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('BecadoBecaControllerFilter')) {
                $filterData = $session->get('BecadoBecaControllerFilter');
                $filterForm = $this->createForm(new BecadoBecaFilterType(), $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
            }
        }

        return array($filterForm, $queryBuilder);
    }

    /**
    * Get results from paginator and get paginator view.
    *
    */
    protected function paginator($queryBuilder)
    {
        // Paginator
        $adapter = new DoctrineORMAdapter($queryBuilder);
        $pagerfanta = new Pagerfanta($adapter);
        $currentPage = $this->getRequest()->get('page', 1);
        $pagerfanta->setCurrentPage($currentPage);
        $entities = $pagerfanta->getCurrentPageResults();

        // Paginator - route generator
        $me = $this;
        $routeGenerator = function($page) use ($me)
        {
            return $me->generateUrl('becadobeca', array('page' => $page));
        };

        // Paginator - view
        $translator = $this->get('translator');
        $view = new TwitterBootstrapView();
        $pagerHtml = $view->render($pagerfanta, $routeGenerator, array(
            'proximity' => 3,
            'prev_message' => $translator->trans('views.index.pagprev', array(), 'JordiLlonchCrudGeneratorBundle'),
            'next_message' => $translator->trans('views.index.pagnext', array(), 'JordiLlonchCrudGeneratorBundle'),
        ));

        return array($entities, $pagerHtml);
    }

    /**
     * Creates a new BecadoBeca entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new BecadoBeca();
        $form = $this->createForm(new BecadoBecaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.create.success');

            return $this->redirect($this->generateUrl('becadobeca_show', array('id' => $entity->getId())));
        }

        return $this->render('BecaBundle:BecadoBeca:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new BecadoBeca entity.
     *
     */
    public function newAction($id)
    {
        $entity = new BecadoBeca();
        $entity->setBecado($id);
        $form   = $this->createForm(new BecadoBecaType(), $entity);

        return $this->render('BecaBundle:BecadoBeca:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a BecadoBeca entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BecaBundle:BecadoBeca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BecadoBeca entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BecaBundle:BecadoBeca:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing BecadoBeca entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BecaBundle:BecadoBeca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BecadoBeca entity.');
        }

        $editForm = $this->createForm(new BecadoBecaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BecaBundle:BecadoBeca:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing BecadoBeca entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BecaBundle:BecadoBeca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BecadoBeca entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BecadoBecaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.update.success');

            return $this->redirect($this->generateUrl('becadobeca_edit', array('id' => $id)));
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.update.error');
        }

        return $this->render('BecaBundle:BecadoBeca:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a BecadoBeca entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BecaBundle:BecadoBeca')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BecadoBeca entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.delete.success');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.delete.error');
        }

        return $this->redirect($this->generateUrl('becadobeca'));
    }

    /**
     * Creates a form to delete a BecadoBeca entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
