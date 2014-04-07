<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Yoda\EventBundle\Entity\Event;

class DefaultController extends Controller
{
    public function indexAction($name,$count)
    {
        $em = $this->getDoctrine()->getManager();
        $nem = $this->get('doctrine')->getManager();
		$repo = $em->getRepository('YodaEventBundle:Event');

		$newEvent = new Event();
		$newEvent->setName($name);
		$newEvent->setLocation($count);
		$newEvent->setTime(new \DateTime('tomorrow noon'));
		$newEvent->setDetails('Ha! Darth HATES surprises!!!!');
		$nem->persist($newEvent);
		$nem->flush();

		$event = $repo->findOneBy(array(
		'name' => "Yoda surprise birthday party",
		));
		return $this->render(
            'YodaEventBundle:Default:index.html.twig',
            array('name' => $name,'count' =>$count,'event'=> $event)
        );
    }
}

