<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function home(): Response
    {
        $articles =['Article1', 'Article2', 'Article3'];

        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
