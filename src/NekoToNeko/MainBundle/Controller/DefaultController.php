<?php

namespace NekoToNeko\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NekoToNekoMainBundle:Default:index.html.twig');
    }
}
