<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegController extends AbstractController
{
    /**
     * @Route("/reg", name="reg")
     */
    public function index(): Response
    {
        return $this->render('reg/index.html.twig', [
            'controller_name' => 'RegController',
        ]);
    }
}