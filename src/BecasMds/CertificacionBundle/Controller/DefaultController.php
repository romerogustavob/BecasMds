<?php

namespace BecasMds\CertificacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CertificacionBundle:Default:index.html.twig', array('name' => $name));
    }
}
