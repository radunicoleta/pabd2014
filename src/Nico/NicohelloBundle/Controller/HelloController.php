<?php

namespace var\www\pabd2014\src\Nico\NicoHelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
 public function indexAction($name)


    {

 return $this->render(
            'NicoHelloBundle:Hello:index.html.twig',
            array('name' => $name)
        );
    }

}

