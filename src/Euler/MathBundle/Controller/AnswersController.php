<?php

namespace Euler\MathBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AnswersController extends Controller
{
    public function indexAction($answer,$result,$person)
    {
        $arr = array(
                       'answer' => $answer,
                       'result'=> $result,
                       'status'=> 'You answered the question!',
        );
        $response = new Response(json_encode($arr));
        $response->headers->set('Content-Type', 'application/json');
        return $this->render('EulerMathBundle:Answers:index.html.twig', array('answer' => $answer,'result' => $result,'persona'=> $person,'response' => $response));
    }
}
