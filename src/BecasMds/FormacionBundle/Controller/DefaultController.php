<?php

namespace BecasMds\FormacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FormacionBundle:Default:index.html.twig', array('name' => $name));
    }
}
