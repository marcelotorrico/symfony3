<?php

namespace MTDLoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MTDLoginBundle:Default:index.html.twig');
    }
}
