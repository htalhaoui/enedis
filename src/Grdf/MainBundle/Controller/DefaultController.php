<?php

namespace Grdf\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //$user=$this->container->get('security.context')->getToken()->getUser();

        return $this->render('GrdfMainBundle:Default:index.html.twig');
    }
}
