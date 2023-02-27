<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    /**
    * @Route("/")
    */

    public function homePage(): response
    {
        return $this->render("home.html.twig", []);
    }

    /**
    * @Route("/a-propos")
    */
    public function aboutPage(): Response
    {
        return $this->render("about.html.twig", []);
    }

}   
