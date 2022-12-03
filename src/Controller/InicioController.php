<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Response;

class InicioController extends AbstractController
{
    #[Route('/', name: 'inicio')]
    public function inicio(FlashBagInterface $sessionapi): Response
    {

        //$session = $requestStack->getSession();
        $foo = implode("<br>",$sessionapi->get('success'));

        
        return new Response(
            "$foo <br/><html><body> Ola Mundo</body></html>"
        );
    }

}