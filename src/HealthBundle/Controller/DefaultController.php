<?php

namespace HealthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Health/Default/home.html.twig' );
    }

    public function homeAction()
    {
        return $this->render('@Health/Default/home.html.twig' );
    }

    public function dashboardAction()
    {
        return $this->render('@Health/Default/dashboard.html.twig' );
    }
}
