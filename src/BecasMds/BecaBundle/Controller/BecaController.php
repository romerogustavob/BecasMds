<?php

namespace BecasMds\BecaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrapView;
use BecasMds\BecaBundle\Entity\Beca;
use BecasMds\BecaBundle\Form\BecaType;
use BecasMds\BecaBundle\Form\BecaFilterType;

/**
 * Beca controller.
 *
 */
class BecaController extends Controller {

    public function mypdfAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository("BecaBundle:Beca")->findAll();
        $base_url=$this->getRequest()->getBaseUrl();
        
        $pdf = $this->container->get("white_october.tcpdf")->create(
                'LANDSCAPE', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false
        );

        $pdf->SetAuthor('Gustavo Romero');
        $pdf->SetTitle('Becas Lista');
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        
        $pdf->SetSubject('Your client');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('helvetica', '', 11, '', true);
        $pdf->setFooterMargin(8);
        $pdf->AddPage();

        $html =  $this->renderView('BecaBundle:Beca:indexPrint.html.twig',
            array(
                'entities' => $entities,
                'baseUrl'  =>$base_url,
            )
        );

        $pdf->writeHTMLCell(
                $w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, 
                $reseth = true, $align = '', $autopadding = true
        );

        $pdf->Output("example.pdf", 'I');
    }

    /**
     * Lists all Beca entities.
     *
     */
    public function indexAction() {
        list($filterForm, $queryBuilder) = $this->filter();
        
        list($entities, $pagerHtml) = $this->paginator($queryBuilder);

        return $this->render('BecaBundle:Beca:index.html.twig', array(
                    'entities' => $entities,
                    'pagerHtml' => $pagerHtml,
                    'filterForm' => $filterForm->createView(),
        ));
    }

    /**
     * Create filter form and process filter request.
     *
     */
    protected function filter() {
        $request = $this->getRequest();
        $session = $request->getSession();
        $filterForm = $this->createForm(new BecaFilterType());
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('BecaBundle:Beca')->createQueryBuilder('e');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('BecaControllerFilter');
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
                $session->set('BecaControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('BecaControllerFilter')) {
                $filterData = $session->get('BecaControllerFilter');
                $filterForm = $this->createForm(new BecaFilterType(), $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
            }
        }

        return array($filterForm, $queryBuilder);
    }

    /**
     * Get results from paginator and get paginator view.
     *
     */
    protected function paginator($queryBuilder) {
        // Paginator
        $adapter = new DoctrineORMAdapter($queryBuilder);
        $pagerfanta = new Pagerfanta($adapter);
        $currentPage = $this->getRequest()->get('page', 1);
        $pagerfanta->setCurrentPage($currentPage);
        $entities = $pagerfanta->getCurrentPageResults();

        // Paginator - route generator
        $me = $this;
        $routeGenerator = function($page) use ($me) {
            return $me->generateUrl('beca', array('page' => $page));
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
     * Creates a new Beca entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Beca();
        $form = $this->createForm(new BecaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.create.success');

            return $this->redirect($this->generateUrl('beca_show', array('id' => $entity->getId())));
        }

        return $this->render('BecaBundle:Beca:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Beca entity.
     *
     */
    public function newAction() {
        $entity = new Beca();
        $form = $this->createForm(new BecaType(), $entity);

        return $this->render('BecaBundle:Beca:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Beca entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BecaBundle:Beca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Beca entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BecaBundle:Beca:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Beca entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BecaBundle:Beca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Beca entity.');
        }

        $editForm = $this->createForm(new BecaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BecaBundle:Beca:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Beca entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BecaBundle:Beca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Beca entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BecaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.update.success');

            return $this->redirect($this->generateUrl('beca_edit', array('id' => $id)));
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.update.error');
        }

        return $this->render('BecaBundle:Beca:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Beca entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BecaBundle:Beca')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Beca entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.delete.success');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.delete.error');
        }

        return $this->redirect($this->generateUrl('beca'));
    }

    /**
     * Creates a form to delete a Beca entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
