<?php

namespace Euler\MathBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MappingController extends Controller
{
    public function catchAllAction($requestUri)
    {
        $arr = array(
                       'requestUri' => $requestUri,
        );
        return $this->render('EulerMathBundle:Mapping:index.html.twig', array('requestUri' => $requestUri));
    }
}
