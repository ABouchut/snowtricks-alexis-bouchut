<?php
// src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class DefaultController
{

    /**
   * @Route("/index", name="index")
   */

    public function index(Environment $twig)
    {
      $content = $twig->render('Default/index.html.twig');

    return new Response($content);
  }
}