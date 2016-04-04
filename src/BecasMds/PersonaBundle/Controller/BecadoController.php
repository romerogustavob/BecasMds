<?php

namespace BecasMds\PersonaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrapView;

use BecasMds\PersonaBundle\Entity\Becado;
use BecasMds\PersonaBundle\Form\BecadoType;
use BecasMds\PersonaBundle\Form\BecadoFilterType;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Becado controller.
 *
 */
class BecadoController extends Controller
{
    /**
     * Lists all Becado entities.
     *
     */
    public function indexAction()
    {
        list($filterForm, $queryBuilder) = $this->filter();

        list($entities, $pagerHtml) = $this->paginator($queryBuilder);

        return $this->render('PersonaBundle:Becado:index.html.twig', array(
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
        $filterForm = $this->createForm(new BecadoFilterType());
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('PersonaBundle:Becado')->createQueryBuilder('e');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('BecadoControllerFilter');
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
                $session->set('BecadoControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('BecadoControllerFilter')) {
                $filterData = $session->get('BecadoControllerFilter');
                $filterForm = $this->createForm(new BecadoFilterType(), $filterData);
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
            return $me->generateUrl('becado', array('page' => $page));
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
     * Creates a new Becado entity.
     *
     */
    public function createAction(Request $request)
    {
        
        $entity  = new Becado();
        $formacion=new \BecasMds\FormacionBundle\Entity\Formacion();
        $formacion->setPersona($entity);
        $entity->addFormacion($formacion);
        $form = $this->createForm(new BecadoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.create.success');
            
            return $this->redirect($this->generateUrl('becado_show', array('id' => $entity->getId())));
        }

        return $this->render('PersonaBundle:Becado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Becado entity.
     *
     */
    public function newAction()
    {
        $entity = new Becado();
        $form   = $this->createForm(new BecadoType(), $entity);

        return $this->render('PersonaBundle:Becado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Becado entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonaBundle:Becado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Becado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PersonaBundle:Becado:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Becado entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonaBundle:Becado')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Becado entity.');
        }

        $editForm = $this->createForm(new BecadoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PersonaBundle:Becado:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Becado entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonaBundle:Becado')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Becado entity.');
        }
        
        $originalFormacion=new ArrayCollection();
        
        foreach($entity->getFormacion() as $formacion){
            $originalFormacion->add($formacion);
        }
        
        $originalDomicilio=new ArrayCollection();
        
        foreach($entity->getDomicilio() as $domicilio){
            $originalDomicilio->add($domicilio);
        }
        
//        $formacion=new \BecasMds\FormacionBundle\Entity\Formacion();
//        $formacion->setPersona($entity);
//        $entity->addFormacion($formacion);
//        $domicilio=new \BecasMds\PersonaBundle\Entity\Domicilio();
//        $domicilio->setPersona($entity);
//        $entity->addDomicilio($domicilio);
        
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Becado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BecadoType(), $entity);
        $editForm->bind($request);
//        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            
            foreach($originalFormacion as $formacion){
                if(false===$entity->getFormacion()->contains($formacion)){
                    $formacion->getPersona()->removeElement($entity);
                    $em->persist($formacion);
                }
            }
            
            foreach($originalDomicilio as $domicilio){
                if(false===$entity->getDomicilio()->contains($domicilio)){
                    $domicilio->getPersona()->removeElement($entity);
                    $em->persist($domicilio);
                }
            }
            
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.update.success');

            return $this->redirect($this->generateUrl('becado_show', array('id' => $id)));
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.update.error');
        }

        return $this->render('PersonaBundle:Becado:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Becado entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PersonaBundle:Becado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Becado entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.delete.success');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.delete.error');
        }

        return $this->redirect($this->generateUrl('becado'));
    }

    /**
     * Creates a form to delete a Becado entity by id.
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
