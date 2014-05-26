<?php

namespace Nico\NicohelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NicoNicohelloBundle:Default:index.html.twig', array('name' => $name));
    }
}
