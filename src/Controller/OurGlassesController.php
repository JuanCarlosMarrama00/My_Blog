<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OurGlassesController extends AbstractController
{
    #[Route('/our_glasses', name: 'our_glasses')]
    public function index(): Response
    {
        return $this->render('our_glasses/index.html.twig', []);
    }
}
