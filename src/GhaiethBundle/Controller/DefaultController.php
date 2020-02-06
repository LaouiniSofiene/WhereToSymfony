<?php

namespace GhaiethBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GhaiethBundle:Default:index.html.twig');
    }
}
