<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController {
    /**
     * @Route("/", name="home_page")
     */
    public function index(Request $request) {
        return $this->render("home.html.twig");
    }
}