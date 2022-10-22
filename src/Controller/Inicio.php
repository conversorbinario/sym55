<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;

class Inicio
{
    /**
     * @Route("/")
     */
    public function inicio(): Response
    {

        return new Response(
            '<html><body> Ola Mundo</body></html>'
        );
    }

}