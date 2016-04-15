<?php

namespace BecasMds\CertificacionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrapView;

use BecasMds\CertificacionBundle\Entity\Certificacion;
use BecasMds\CertificacionBundle\Form\CertificacionType;
use BecasMds\CertificacionBundle\Form\CertificacionFilterType;

/**
 * Certificacion controller.
 *
 */
class CertificacionController extends Controller
{
    /**
     * Lists all Certificacion entities.
     *
     */
    public function indexAction()
    {
        list($filterForm, $queryBuilder) = $this->filter();

        list($entities, $pagerHtml) = $this->paginator($queryBuilder);

        return $this->render('CertificacionBundle:Certificacion:index.html.twig', array(
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
        $filterForm = $this->createForm(new CertificacionFilterType());
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('CertificacionBundle:Certificacion')->createQueryBuilder('e');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('CertificacionControllerFilter');
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
                $session->set('CertificacionControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('CertificacionControllerFilter')) {
                $filterData = $session->get('CertificacionControllerFilter');
                $filterForm = $this->createForm(new CertificacionFilterType(), $filterData);
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
            return $me->generateUrl('certificacion', array('page' => $page));
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
     * Creates a new Certificacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Certificacion();
        $form = $this->createForm(new CertificacionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.create.success');

            return $this->redirect($this->generateUrl('certificacion_show', array('id' => $entity->getId())));
        }

        return $this->render('CertificacionBundle:Certificacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Certificacion entity.
     *
     */
    public function newAction(\BecasMds\BecaBundle\Entity\BecadoBeca $idBecadoBeca=null)
    {
        $entity = new Certificacion();
        $entity->setBecadobeca($idBecadoBeca);
        if(!$entity->getBecadobeca()->getBecado()->getActivo()){
            throw $this->createNotFoundException('La Persona No se encuentra Activa, No puede ser Certificada');
        }
        $monto=$entity->getBecadobeca()->getBeca()->getMonto();
        $entity->setMonto($monto);
        $form   = $this->createForm(new CertificacionType(), $entity);

        return $this->render('CertificacionBundle:Certificacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Certificacion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CertificacionBundle:Certificacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Certificacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CertificacionBundle:Certificacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Certificacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CertificacionBundle:Certificacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Certificacion entity.');
        }

        $editForm = $this->createForm(new CertificacionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CertificacionBundle:Certificacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Certificacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CertificacionBundle:Certificacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Certificacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CertificacionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.update.success');

            return $this->redirect($this->generateUrl('certificacion_edit', array('id' => $id)));
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.update.error');
        }

        return $this->render('CertificacionBundle:Certificacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Certificacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CertificacionBundle:Certificacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Certificacion entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.delete.success');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.delete.error');
        }

        return $this->redirect($this->generateUrl('certificacion'));
    }

    /**
     * Creates a form to delete a Certificacion entity by id.
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
