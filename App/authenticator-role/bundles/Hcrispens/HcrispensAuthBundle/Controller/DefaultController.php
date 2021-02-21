<?php

namespace Hcrispens\HcrispensAuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@HcrispensAuthBundle/Default/index.html.twig');
    }
}
