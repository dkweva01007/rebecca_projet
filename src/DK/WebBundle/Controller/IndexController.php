<?php

namespace DK\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('DKWebBundle:Default:index.html.twig');
    }
}
