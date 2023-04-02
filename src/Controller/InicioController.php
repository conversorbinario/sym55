<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class InicioController extends AbstractController
{

    /**
     * Solo redirecciona conforme al _locale
     *
     * @param Request $request
     * @param FlashBagInterface $sessionapi
     * @return Response
     */
    #[Route('/', name: 'inicio')]
    public function inicioIndex(Request $request, FlashBagInterface $sessionapi): Response
    {
        $locale = $request->getLocale();


        return $this->redirectToRoute('inicioLocale', ['_locale' => $locale]);

    }
}
