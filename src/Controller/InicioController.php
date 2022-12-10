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
        $mensajeOK= $sessionapi->get('success');

        
        return $this->render('principal/inicio.html.twig',['mensajesExito'=>$mensajeOK]);
        

    }

}