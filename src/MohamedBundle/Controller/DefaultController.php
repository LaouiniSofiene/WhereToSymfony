<?php

namespace MohamedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MohamedBundle:Default:index.html.twig');
    }
}
