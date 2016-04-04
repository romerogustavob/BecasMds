<?php

namespace BecasMds\BecaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BecaBundle:Default:index.html.twig', array('name' => $name));
    }
}
