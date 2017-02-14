<?php

namespace TchatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/tchat")
     */
    public function indexAction()
    {
        return $this->render('TchatBundle:Default:index.html.twig');
    }
}
