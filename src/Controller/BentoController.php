<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BentoController extends AbstractController
{
    /**
     * @Route("/", name="bento")
     */
    public function index(): Response
    {
        return $this->render('bento/index.html.twig', [
            'controller_name' => 'BentoController',
        ]);
    }
}
