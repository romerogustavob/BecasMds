<?php

namespace BecasMds\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $reponse=null;
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')){ 
            $response= new RedirectResponse($this->generateUrl('fos_user_security_login'));
        }else{
            $response= new RedirectResponse($this->generateUrl('becado'));
        }
        return $response;
    }
}
