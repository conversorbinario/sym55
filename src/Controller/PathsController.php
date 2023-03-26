<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\RedirectResponse;

#[Route('/{_locale}')]
class PathsController extends AbstractController
{

   

    #[Route('/inicio', name: 'inicioLocale')]
    public function inicioLocale(Request $request, FlashBagInterface $sessionapi): Response
    {

        $locale = $request->getLocale();
        //$session = $requestStack->getSession();
        $foo = implode("<br>",$sessionapi->get('success'));
        
        return $this->render('principal/inicio.html.twig');
        
        // return new Response(
        //     "$foo <br/><html><body> Ola Mundo</body></html>"
        // );
    }

    #[Route('/proba', name: 'proba')]
    public function proba(Request $request, FlashBagInterface $sessionapi): Response
    {
        

        // dump($requestStack->getSession());
        // die;
        $locale = $request->getLocale();
        //$session = $requestStack->getSession();
        $foo = implode("<br>",$sessionapi->get('success'));

        
        return $this->render('principal/inicio.html.twig');
        
        // new Response(
        //     "$foo <br/><html><body> Ola Mundo</body></html>"
        // );
    }
}