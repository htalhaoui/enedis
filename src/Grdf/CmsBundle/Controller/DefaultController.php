<?php

namespace Grdf\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GrdfCmsBundle:Default:index.html.twig');
    }
}

