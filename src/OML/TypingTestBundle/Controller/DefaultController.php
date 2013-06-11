<?php

namespace OML\TypingTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OMLTypingTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
