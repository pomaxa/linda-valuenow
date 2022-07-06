<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ValueNowIndexController extends AbstractController
{
    #[Route('/', name: 'app_value_now_index')]
    public function index(): Response
    {
        $user = $this->getUser();

        return $this->render('value_now_index/index.html.twig', [
            'controller_name' => 'ValueNowIndexController',
            'user' => $user,
        ]);
    }
}
