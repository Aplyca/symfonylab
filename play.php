<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use Euler\MathBundle\Entity\Questions;
use Yoda\EventBundle\Entity\Event;
use Acme\DemoBundle\Entity\Post;

$loader = require_once __DIR__.'/app/bootstrap.php.cache';
Debug::enable();

require_once __DIR__.'/app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$kernel->boot();

$container = $kernel->getContainer();
$container->enterScope('request');
$container->set('request',$request);

$templating = $container->get('templating');

$post = new Post();
$post->setNombre('Viernes post');
$post->setApellido('Deathstar');
$post->setFecha(new \DateTime('tomorrow noon'));
$post->setCedula('123455');

$em = $container->get('doctrine')->getManager();
$em->persist($post);
$em->flush();