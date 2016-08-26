<?php

namespace Grdf\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GrdfFrontOfficeBundle:Default:index.html.twig');
    }
}