<?php

namespace BecasMds\PersonaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrapView;

use BecasMds\PersonaBundle\Entity\Barrio;
use BecasMds\PersonaBundle\Form\BarrioType;
use BecasMds\PersonaBundle\Form\BarrioFilterType;

/**
 * Barrio controller.
 *
 */
class BarrioController extends Controller
{
    /**
     * Lists all Barrio entities.
     *
     */
    public function indexAction()
    {
        list($filterForm, $queryBuilder) = $this->filter();

        list($entities, $pagerHtml) = $this->paginator($queryBuilder);

        return $this->render('PersonaBundle:Barrio:index.html.twig', array(
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
        $filterForm = $this->createForm(new BarrioFilterType());
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('PersonaBundle:Barrio')->createQueryBuilder('e');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('BarrioControllerFilter');
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
                $session->set('BarrioControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('BarrioControllerFilter')) {
                $filterData = $session->get('BarrioControllerFilter');
                $filterForm = $this->createForm(new BarrioFilterType(), $filterData);
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
            return $me->generateUrl('barrio', array('page' => $page));
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
     * Creates a new Barrio entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Barrio();
        $form = $this->createForm(new BarrioType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.create.success');

            return $this->redirect($this->generateUrl('barrio_show', array('id' => $entity->getId())));
        }

        return $this->render('PersonaBundle:Barrio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Barrio entity.
     *
     */
    public function newAction()
    {
        $entity = new Barrio();
        $form   = $this->createForm(new BarrioType(), $entity);

        return $this->render('PersonaBundle:Barrio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Barrio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonaBundle:Barrio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Barrio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PersonaBundle:Barrio:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Barrio entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonaBundle:Barrio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Barrio entity.');
        }

        $editForm = $this->createForm(new BarrioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PersonaBundle:Barrio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Barrio entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonaBundle:Barrio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Barrio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BarrioType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.update.success');

            return $this->redirect($this->generateUrl('barrio_edit', array('id' => $id)));
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.update.error');
        }

        return $this->render('PersonaBundle:Barrio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Barrio entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PersonaBundle:Barrio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Barrio entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.delete.success');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.delete.error');
        }

        return $this->redirect($this->generateUrl('barrio'));
    }

    /**
     * Creates a form to delete a Barrio entity by id.
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

    /**
     * @Route("/barrio", name="select_barrio", condition="request.headers.get('X-Requested-With') == 'XMLHttpRequest'")
     */
     public function barrioAction(Request $request)
     {
         $em = $this->getDoctrine()->getManager();

         $localidad_id = $request->request->get('localidad_id');

         $barrio = $em->getRepository('PersonaBundle:Barrio')->findByLocalidad($localidad_id);

         return new JsonResponse($barrio);
     }
    
    
}
