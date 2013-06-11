<?php

namespace OML\TypingTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticPagesController extends Controller
{
    public function indexAction()
    {
    	return $this->render('OMLTypingTestBundle:StaticPages:index.html.twig');
    }

}
