<?php

namespace App\Controller;

use App\Entity\FreeQuoteRequest;
use App\Form\FreeQuoteRequestType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ValueNowIndexController extends AbstractController
{
    #[Route('/', name: 'app_value_now_index')]
    public function index(): Response
    {
        $user = $this->getUser();

        $freeQuoteRequest = new FreeQuoteRequest();
        $form = $this->createForm(FreeQuoteRequestType::class, $freeQuoteRequest);

        return $this->renderForm('value_now_index/index.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
}
