<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
{
    #[Route('/', name: 'app_vinyl')]
    public function homepage(): Response
    {
        return New Response('hello world');
    }

    #[Route('/browse/{slug}', name: 'browse')]
    public function browse(string $slug = null): Response
    {
        if($slug){
            $title = 'Genre: '.ucwords(str_replace('-', ' ', $slug));
        } else {
            $title = 'All Genres';
        }
        
        return new Response($title);
    }
}
