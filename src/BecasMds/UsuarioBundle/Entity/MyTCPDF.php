<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BecasMds\UsuarioBundle\Entity;
use TCPDF;

/**
 * Description of MyTCPDF
 *
 * @author GUSTAVO
 */
class MyTCPDF extends TCPDF{
    //put your code here
    //Page header
    public function Header() {
        // Logo
        $path_to_image='\..\BecaBundle\\Resources\\public\\images\\';
        $image_file = K_PATH_IMAGES.'logoDesarrolloSocial-medium.jpg';
        $this->Image($image_file, 7, 5, 50, 21, 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(320, 22, 'Gestión de Becas - MDS', 0, false, 'C', 0, '', 1, false, 'R', 'M');
        $this->Line(7, 25, 291, 25, array(0,0,0,0));
    }
    
    public function Footer() {
          /* establecemos el color del texto */
          $this->SetTextColor(0,0,0);
          /* insertamos numero de pagina y total de paginas*/
          $this->Cell(520, 10, 'Pág. '.$this->getAliasNumPage().
                             '/'.
                             $this-> getAliasNbPages(),
                             0, false, 'C', 0, '', 1, false, 'R', 'R');
          

    }
}
