<?php

namespace BecasMds\BecaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrapView;

use BecasMds\BecaBundle\Entity\BecaVulnerable;
use BecasMds\BecaBundle\Form\BecaVulnerableType;
use BecasMds\BecaBundle\Form\BecaVulnerableFilterType;
use BecasMds\BecaBundle\Entity\BecadoBeca;
use BecasMds\PersonaBundle\Entity\Becado;

/**
 * BecaVulnerable controller.
 *
 */
class BecaVulnerableController extends Controller
{
    /**
     * Lists all BecaVulnerable entities.
     *
     */
    public function indexAction()
    {
        list($filterForm, $queryBuilder) = $this->filter();

        list($entities, $pagerHtml) = $this->paginator($queryBuilder);

        return $this->render('BecaBundle:BecaVulnerable:index.html.twig', array(
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
        $filterForm = $this->createForm(new BecaVulnerableFilterType());
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('BecaBundle:BecaVulnerable')->createQueryBuilder('e');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('BecaVulnerableControllerFilter');
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
                $session->set('BecaVulnerableControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('BecaVulnerableControllerFilter')) {
                $filterData = $session->get('BecaVulnerableControllerFilter');
                $filterForm = $this->createForm(new BecaVulnerableFilterType(), $filterData);
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
            return $me->generateUrl('becavulnerable', array('page' => $page));
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
     * Creates a new BecaVulnerable entity.
     *
     */
    public function createAction(Request $request,$becado=null)
    {
        $user=$this->getUser();
        $entity  = new BecaVulnerable();
        
        $entity->setCreatedBy($user);
        $entity->setUpdatedBy($user);
        $entity->setCreatedAt(new \DateTime('now'));
        $entity->setUpdatedAt(new \DateTime('now'));
        
        $becadobeca=new BecadoBeca();
        $em1=$this->getDoctrine()->getManager();
        $becadoa=$em1->getRepository('PersonaBundle:Becado')->find($becado);
        $becadobeca->setBecado($becadoa);
        $form = $this->createForm(new BecaVulnerableType(), $entity);
        $form->bind($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $becadobeca->setBecaVulnerable($entity);
            $becadobeca->setActivo(true);
            $becadobeca->setFechaAlta(new \DateTime('now'));
            $em->persist($becadobeca);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.create.success');

            return $this->redirect($this->generateUrl('becavulnerable_show', array('id' => $entity->getId())));
        }

        return $this->render('BecaBundle:BecaVulnerable:new.html.twig', array(
            'entity' => $entity,
            'becado'=>$becado,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new BecaVulnerable entity.
     *
     */
    public function newAction($becado)
    {
        
        $entity = new BecaVulnerable();       
        $form   = $this->createForm(new BecaVulnerableType(), $entity);

        return $this->render('BecaBundle:BecaVulnerable:new.html.twig', array(
            'entity' => $entity,
            'becado'=>$becado,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a BecaVulnerable entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BecaBundle:BecaVulnerable')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BecaVulnerable entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BecaBundle:BecaVulnerable:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing BecaVulnerable entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BecaBundle:BecaVulnerable')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BecaVulnerable entity.');
        }

        $editForm = $this->createForm(new BecaVulnerableType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BecaBundle:BecaVulnerable:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing BecaVulnerable entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BecaBundle:BecaVulnerable')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BecaVulnerable entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BecaVulnerableType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.update.success');

            return $this->redirect($this->generateUrl('becavulnerable_edit', array('id' => $id)));
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.update.error');
        }

        return $this->render('BecaBundle:BecaVulnerable:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a BecaVulnerable entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BecaBundle:BecaVulnerable')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BecaVulnerable entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.delete.success');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.delete.error');
        }

        return $this->redirect($this->generateUrl('becavulnerable'));
    }

    /**
     * Creates a form to delete a BecaVulnerable entity by id.
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
