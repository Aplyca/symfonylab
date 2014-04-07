<?php

namespace Euler\MathBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProblemsController extends Controller
{
    public function indexAction($name,$points)
    {
        return $this->render('EulerMathBundle:Problems:index.html.twig', array('name' => $name,'points' => $points));

    }
}
