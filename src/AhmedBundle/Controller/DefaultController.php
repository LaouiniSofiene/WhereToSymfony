<?php

namespace AhmedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AhmedBundle:Default:index.html.twig');
    }
}
