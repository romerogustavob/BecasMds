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
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use BecasMds\BecaBundle\Entity\BecadoBeca;


/**
 * Certificacion controller.
 *
 */
class CertificacionController extends Controller
{
     public function certificacionIndividualPdfAction($id) {

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository("CertificacionBundle:Certificacion")->findIndividualCertificacion($id);
        $base_url=$this->getRequest()->getBaseUrl();
        
        $pdf = $this->container->get("white_october.tcpdf")->create(
                'LANDSCAPE', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false
        );    
        
        $pdf->SetAuthor('Ministerio de Dasarrollo Social');
        $pdf->SetTitle('Certificación Lista');
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        
        $pdf->SetSubject('Desarrollo Social Chaco');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('helvetica', '', 11, '', true);
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
        $pdf->setFooterMargin(15);
        $pdf->AddPage();

        $html =  $this->renderView('CertificacionBundle:Certificacion:individualCertificacionPrint.html.twig',
            array(
            'entities' => $entities,
            'baseUrl'  =>$base_url,
             )
        );

        $pdf->writeHTMLCell(
                $w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true
        );

        $pdf->Output("certificacionIndiv.pdf", 'I');
    }
    
    /**
     * Lists all Certificacion entities.
     *
     */
    public function indexAction($toexcel)
    {
        list($filterForm, $queryBuilder) = $this->filter();

        list($entities, $pagerHtml) = $this->paginator($queryBuilder);
        
        if($toexcel=='true'){
            $response = $this->forward('CertificacionBundle:Certificacion:excelCertificacionTotal', array(
            'entities'  => $entities,));
            return $response;
        }
        
        return $this->render('CertificacionBundle:Certificacion:index.html.twig', array(
            'entities' => $entities,
            'pagerHtml' => $pagerHtml,
            'filterForm' => $filterForm->createView(),
        ));
    }
    
    public function individualCertificacionAction($id){
        $em=  $this->getDoctrine()->getManager();
        $entities=$em->getRepository('CertificacionBundle:Certificacion')->findIndividualCertificacion($id);
 
        return $this->render('CertificacionBundle:Certificacion:individualCertificacion.html.twig',
                array(
                    'entities'=>$entities,
                    'idBecado'=>$id
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
    public function createAction(Request $request, BecadoBeca $becadobeca)
    {
        $entity  = new Certificacion();
        
        $entity->setBecadobeca($idBecadoBeca);
        
        $entity->setCreatedBy($this->getUser());
        $entity->setUpdatedBy($this->getUser());
        $entity->setCreatedAt(new \DateTime('now'));
        $entity->setUpdatedAt(new \DateTime('now'));
        
        $becatipo=$request->request->get('becatipo');
        $becafuncion=$request->request->get('becafuncion');
        $becado=$becadobeca;
        $entity->setBecadobeca($becado);
        $entity->setBecatipo($becatipo);
        $entity->setBecafuncion($becafuncion);
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
        $entity->setCreatedBy($this->getUser());
        $entity->setUpdatedBy($this->getUser());
        $entity->setCreatedAt(new \DateTime('now'));
        $entity->setUpdatedAt(new \DateTime('now'));
        
        if(!$entity->getBecadobeca()->getBecado()->getActivo()){
            throw $this->createNotFoundException('La Persona No se encuentra Activa, No puede ser Certificada');
        }
        
        if (is_null($entity->getBecadobeca()->getBeca())){
            
            $becatipo=$entity->getBecadobeca()->getBecaVulnerable()->getNombre();
            $becafuncion=$entity->getBecadobeca()->getBecaVulnerable()->getTipoFuncion()->getDescripcion();
            $monto=$entity->getBecadobeca()->getBecaVulnerable()->getMonto();
            $entity->setMonto($monto);
            $entity->setBecatipo($becatipo);
            $entity->setBecafuncion($becafuncion);
            $this->get('session')->getFlashBag()->add('error', 'Detecta correctamente la Beca General null');
          
        }
        if(is_null($entity->getBecadobeca()->getBecaVulnerable())){
            $becatipo=$entity->getBecadobeca()->getBeca()->getTipoBeca()->getDescripcion();
            $becafuncion=$entity->getBecadobeca()->getBeca()->getTipoFuncion()->getDescripcion();
            $monto=$entity->getBecadobeca()->getBeca()->getMonto();
            $entity->setMonto($monto);
            $entity->setBecatipo($becatipo);
            $entity->setBecafuncion($becafuncion);
        }
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
        
        $entity->setCreatedBy($this->getUser());
        $entity->setUpdatedBy($this->getUser());
        $entity->setCreatedAt(new \DateTime('now'));
        $entity->setUpdatedAt(new \DateTime('now'));
        
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
    
    public function excelCertificacionIndAction($id){
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository("CertificacionBundle:Certificacion")->findIndividualCertificacion($id);
        $base_url=$this->getRequest()->getBaseUrl();
        
         // ask the service for a Excel5
        $excelService = $this->get('xls.service_xls2007');
        // or $this->get('xls.service_pdf');
        // or create your own is easy just modify services.yml

        $fecha=new \DateTime('now');
        $fechaArchivo=$fecha->format('Y-m-d');
        // create the object see http://phpexcel.codeplex.com documentation
        $excelService->excelObj->getProperties()->setCreator("ministerio de Desarrollo Social")
                            ->setLastModifiedBy("Ministerio de Desarrollo Social")
                            ->setTitle("Office 2007 XLSX Document")
                            ->setSubject("Office 2007 XLSX Document")
                            ->setDescription("Document for Office 2007 XLSX, generated using PHP classes.")
                            ->setKeywords("office 2007 openxml php")
                            ->setCategory("Result file");
        $columns = array( 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U' );
        foreach ( $columns as $column ) {
            $excelService->excelObj->getActiveSheet()->getColumnDimension($column)->setAutoSize(true);
        }
        $fila=1;
        $total=0;
            foreach ($entities as $certificacion){
                $excelService->excelObj->setActiveSheetIndex(0)
                        ->setCellValue('A'.$fila, $fila)
                        ->setCellValue('B'.$fila,$certificacion->getBecadoBeca()->getBecado()->getDni())
                        ->setCellValue('C'.$fila,$certificacion->getBecadoBeca()->getBecado()->getApellidos().' '.
                                $certificacion->getBecadoBeca()->getBecado()->getNombres())
                        ->setCellValue('D'.$fila,$certificacion->getTotalPagar())                        
                        ->setCellValue('E'.$fila,'')
                        ->setCellValue('F'.$fila,'')
                        ->setCellValue('G'.$fila, 481)
                        ->setCellValue('H'.$fila,'PH')
                        ->setCellValue('I'.$fila,0)
                        ->setCellValue('J'.$fila,0)
                        ->setCellValue('K'.$fila,0)
                        ->setCellValue('L'.$fila,0)
                        ->setCellValue('M'.$fila,0)
                        ->setCellValue('N'.$fila, $fila)
                        ->setCellValue('O'.$fila, 201603)
                        ->setCellValue('P'.$fila, 1)
                        ->setCellValue('Q'.$fila,$certificacion->getBecadoBeca()->getBecado()->getDni())
                        ->setCellValue('R'.$fila, 2);
                
                /* Paso a formato general para que me quite las , después hago el cálculo y 
                 * después le doy el formato general al final, previo asignación del monto a pagar original*/    
                $excelService->excelObj->getActiveSheet()
                ->getStyle('S'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
                $totalS=$certificacion->getTotalPagar()*100;
                $excelService->excelObj->setActiveSheetIndex(0)
                        ->setCellValue('S'.$fila,$totalS);
                $total=$total+$certificacion->getTotalPagar();
                
                /**Formateo las celdas, faltan I y L porque llevan 2 espacios en blanco, 
                 * los reemplazo en la cadena del string que se carga en la columna U*/
                $excelService->excelObj->getActiveSheet()
                ->getStyle('K'.$fila)
                ->getNumberFormat()
                ->setFormatCode('00000000000');
               $excelService->excelObj->getActiveSheet()
                ->getStyle('G'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000000');
               $G=$excelService->excelObj->getActiveSheet()->getCell('G'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('G'.$fila)
                ->getNumberFormat()
                ->setFormatCode('General');
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('H'.$fila)
                ->getNumberFormat()
                ->setFormatCode('00');
               $H=$excelService->excelObj->getActiveSheet()->getCell('H'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('H'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('J'.$fila)
                ->getNumberFormat()
                ->setFormatCode('00000');
               $J=$excelService->excelObj->getActiveSheet()->getCell('J'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('J'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('K'.$fila)
                ->getNumberFormat()
                ->setFormatCode('00000000000');
               $K=$excelService->excelObj->getActiveSheet()->getCell('K'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('K'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('M'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000000');
               $M=$excelService->excelObj->getActiveSheet()->getCell('M'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('M'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('N'.$fila)
                ->getNumberFormat()
                ->setFormatCode('0000000');
               $N=$excelService->excelObj->getActiveSheet()->getCell('N'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('N'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('O'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000000');
               $O=$excelService->excelObj->getActiveSheet()->getCell('O'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('O'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('P'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000');
               $P=$excelService->excelObj->getActiveSheet()->getCell('P'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('P'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('Q'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000000000000000');
               $Q=$excelService->excelObj->getActiveSheet()->getCell('Q'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('Q'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('R'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000');
               $R=$excelService->excelObj->getActiveSheet()->getCell('R'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('R'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('S'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000000000000000');
               $S=$excelService->excelObj->getActiveSheet()->getCell('S'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('S'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->setActiveSheetIndex(0)
               ->setCellValue('S'.$fila,$certificacion->getTotalPagar());
               
               /*Concateno los valores formateados y defino type string para que me tome los valores con su respectivos formatos*/
               $excelService->excelObj->setActiveSheetIndex(0)->setCellValueExplicit('U'.$fila, $G.''.$H.
                       '  '.$J.''.$K.'  '.$M.''.$N.''.$O.''.$P.''.$Q.''.$R.''.$S,\PHPExcel_Cell_DataType::TYPE_STRING);

                $fila+=1;
            }
            $excelService->excelObj->setActiveSheetIndex(0)
                    ->setCellValue('A'.$fila, 'Total')
                    ->setCellValue('D'.$fila, $total)
                    ->setCellValue('S'.$fila, $total);
            /** 
             * Esta sería la fórmula general
                =TEXTO(G1;"000000")&TEXTO(H'.$fila.';"00")&TEXTO(I'.$fila.';"  ")&'
                  . 'TEXTO(J'.$fila.';"00000")&TEXTO(K'.$fila.';"00000000000")&TEXTO(L'.$fila.';"  ")&'
                  . 'TEXTO(M'.$fila.';"000000")&TEXTO(N'.$fila.';"0000000")&TEXTO(O'.$fila.';"000000")&'
                  . 'TEXTO(P'.$fila.';"000")&TEXTO(Q'.$fila.';"000000000000000")&TEXTO(R'.$fila.';"000")&'
                  . 'TEXTO(S'.$fila.'*100;"000000000000000")
            */
         
        $excelService->excelObj->getActiveSheet()->setTitle('Certificaciones');
        
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $excelService->excelObj->setActiveSheetIndex(0);

        //create the response
        $response = $excelService->getResponse();
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;filename=certificacion-'.$fechaArchivo.'.xlsx');

        // If you are using a https connection, you have to set those two headers and use sendHeaders() for compatibility with IE <9
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
   
        $filename='certificacion-'.$fechaArchivo.'.xlsx';
        $excelService->getStreamWriter()->write( $filename );
        return $response;
    }
    
    public function excelCertificacionTotalAction($entities){
//        $em = $this->getDoctrine()->getManager();
//        $entities = $em->getRepository("CertificacionBundle:Certificacion")->findIndividualCertificacion($id);
        
        $base_url=$this->getRequest()->getBaseUrl();
        
         // ask the service for a Excel5
        $excelService = $this->get('xls.service_xls2007');
        // or $this->get('xls.service_pdf');
        // or create your own is easy just modify services.yml

        $fecha=new \DateTime('now');
        $fechaArchivo=$fecha->format('Y-m-d');
        // create the object see http://phpexcel.codeplex.com documentation
        $excelService->excelObj->getProperties()->setCreator("ministerio de Desarrollo Social")
                            ->setLastModifiedBy("Ministerio de Desarrollo Social")
                            ->setTitle("Office 2007 XLSX Document")
                            ->setSubject("Office 2007 XLSX Document")
                            ->setDescription("Document for Office 2007 XLSX, generated using PHP classes.")
                            ->setKeywords("office 2007 openxml php")
                            ->setCategory("Result file");
        $columns = array( 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U' );
        foreach ( $columns as $column ) {
            $excelService->excelObj->getActiveSheet()->getColumnDimension($column)->setAutoSize(true);
        }
        $fila=1;
        $total=0;
        $tipoBeca='';
            foreach ($entities as $certificacion){
                $excelService->excelObj->setActiveSheetIndex(0)
                        ->setCellValue('A'.$fila, $fila)
                        ->setCellValue('B'.$fila,$certificacion->getBecadoBeca()->getBecado()->getDni())
                        ->setCellValue('C'.$fila,$certificacion->getBecadoBeca()->getBecado()->getApellidos().' '.
                                $certificacion->getBecadoBeca()->getBecado()->getNombres())
                        ->setCellValue('D'.$fila,$certificacion->getTotalPagar())                        
                        ->setCellValue('E'.$fila,'')
                        ->setCellValue('F'.$fila,'')
                        ->setCellValue('G'.$fila, 481)
                        ->setCellValue('H'.$fila,'PH')
                        ->setCellValue('I'.$fila,0)
                        ->setCellValue('J'.$fila,0)
                        ->setCellValue('K'.$fila,0)
                        ->setCellValue('L'.$fila,0)
                        ->setCellValue('M'.$fila,0)
                        ->setCellValue('N'.$fila, $fila)
                        ->setCellValue('O'.$fila, 201603)
                        ->setCellValue('P'.$fila, 1)
                        ->setCellValue('Q'.$fila,$certificacion->getBecadoBeca()->getBecado()->getDni())
                        ->setCellValue('R'.$fila, 2);
                
                /* Paso a formato general para que me quite las , después hago el cálculo y 
                 * después le doy el formato general al final, previo asignación del monto a pagar original*/    
                $excelService->excelObj->getActiveSheet()
                ->getStyle('S'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
                $totalS=$certificacion->getTotalPagar()*100;
                $excelService->excelObj->setActiveSheetIndex(0)
                        ->setCellValue('S'.$fila,$totalS);
                $total=$total+$certificacion->getTotalPagar();
                
                /**Formateo las celdas, faltan I y L porque llevan 2 espacios en blanco, 
                 * los reemplazo en la cadena del string que se carga en la columna U*/
                $excelService->excelObj->getActiveSheet()
                ->getStyle('K'.$fila)
                ->getNumberFormat()
                ->setFormatCode('00000000000');
               $excelService->excelObj->getActiveSheet()
                ->getStyle('G'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000000');
               $G=$excelService->excelObj->getActiveSheet()->getCell('G'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('G'.$fila)
                ->getNumberFormat()
                ->setFormatCode('General');
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('H'.$fila)
                ->getNumberFormat()
                ->setFormatCode('00');
               $H=$excelService->excelObj->getActiveSheet()->getCell('H'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('H'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('J'.$fila)
                ->getNumberFormat()
                ->setFormatCode('00000');
               $J=$excelService->excelObj->getActiveSheet()->getCell('J'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('J'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('K'.$fila)
                ->getNumberFormat()
                ->setFormatCode('00000000000');
               $K=$excelService->excelObj->getActiveSheet()->getCell('K'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('K'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('M'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000000');
               $M=$excelService->excelObj->getActiveSheet()->getCell('M'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('M'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('N'.$fila)
                ->getNumberFormat()
                ->setFormatCode('0000000');
               $N=$excelService->excelObj->getActiveSheet()->getCell('N'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('N'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('O'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000000');
               $O=$excelService->excelObj->getActiveSheet()->getCell('O'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('O'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('P'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000');
               $P=$excelService->excelObj->getActiveSheet()->getCell('P'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('P'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('Q'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000000000000000');
               $Q=$excelService->excelObj->getActiveSheet()->getCell('Q'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('Q'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('R'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000');
               $R=$excelService->excelObj->getActiveSheet()->getCell('R'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('R'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->getActiveSheet()
                ->getStyle('S'.$fila)
                ->getNumberFormat()
                ->setFormatCode('000000000000000');
               $S=$excelService->excelObj->getActiveSheet()->getCell('S'.$fila)->getFormattedValue();
               $excelService->excelObj->getActiveSheet()
                ->getStyle('S'.$fila)
                ->getNumberFormat()
                ->setFormatCode("General");
               
               $excelService->excelObj->setActiveSheetIndex(0)
               ->setCellValue('S'.$fila,$certificacion->getTotalPagar());
               
               /*Concateno los valores formateados y defino type string para que me tome los valores con su respectivos formatos*/
               $excelService->excelObj->setActiveSheetIndex(0)->setCellValueExplicit('U'.$fila, $G.''.$H.
                       '  '.$J.''.$K.'  '.$M.''.$N.''.$O.''.$P.''.$Q.''.$R.''.$S,\PHPExcel_Cell_DataType::TYPE_STRING);

                $fila+=1;
                $tipoBeca=$certificacion->getBecaTipo();
            }
            $excelService->excelObj->setActiveSheetIndex(0)
                    ->setCellValue('A'.$fila, 'Total')
                    ->setCellValue('D'.$fila, $total)
                    ->setCellValue('S'.$fila, $total);
            /** 
             * Esta sería la fórmula general
                =TEXTO(G1;"000000")&TEXTO(H'.$fila.';"00")&TEXTO(I'.$fila.';"  ")&'
                  . 'TEXTO(J'.$fila.';"00000")&TEXTO(K'.$fila.';"00000000000")&TEXTO(L'.$fila.';"  ")&'
                  . 'TEXTO(M'.$fila.';"000000")&TEXTO(N'.$fila.';"0000000")&TEXTO(O'.$fila.';"000000")&'
                  . 'TEXTO(P'.$fila.';"000")&TEXTO(Q'.$fila.';"000000000000000")&TEXTO(R'.$fila.';"000")&'
                  . 'TEXTO(S'.$fila.'*100;"000000000000000")
            */
         
        $excelService->excelObj->getActiveSheet()->setTitle('Certificación-'.$tipoBeca);
        
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $excelService->excelObj->setActiveSheetIndex(0);

        //create the response
        $response = $excelService->getResponse();
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;filename=certificacionGeneral'.$tipoBeca.'-'.$fechaArchivo.'.xlsx');

        // If you are using a https connection, you have to set those two headers and use sendHeaders() for compatibility with IE <9
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
   
        $filename='certificacionGeneral'.$tipoBeca.'-'.$fechaArchivo.'.xlsx';
        $excelService->getStreamWriter()->write( $filename );
        return $response;
    }
    
}
