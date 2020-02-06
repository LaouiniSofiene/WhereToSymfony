<?php

namespace SofienBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SofienBundle:Default:index.html.twig');
    }
}
