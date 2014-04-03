<?php

namespace Euler\MathBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EulerMathBundle:Default:index.html.twig', array('name' => $name));
    }
}
