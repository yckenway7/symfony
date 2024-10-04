<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/service/{name}', name: 'showService')]
    public function showService(string $name): Response
    {
        return $this->render('service/index.html.twig', [
            'service_name' => $name,
        ]);
    }

    #[Route('/home', name: 'goToIndex')]
    public function  goToIndex(): Response
    {
        return $this->redirectToRoute('home/index.html.twig');
    }
}
