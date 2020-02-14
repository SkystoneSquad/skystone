<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return new Response(
            '<html><body>yeet</body>'
        );
    }
}