<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class VinylController extends AbstractController
{
    #[Route('/', name: 'app_vinyl')]
    public function homepage(): Response
    {
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'WaterFalls', 'artist' => 'TLC'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Maria Carey'],
        ];
        

        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks
        ]);
        
    }

    #[Route('/browse/{slug}', name: 'app_browse')]
    public function browse(string $slug = null): Response
    {
        $genre = $slug ? ucwords(str_replace('-', ' ', $slug)) : null;
        
        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre,
        ]);
    }
}
