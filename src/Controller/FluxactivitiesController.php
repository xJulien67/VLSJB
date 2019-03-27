<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FluxactivitiesController extends AbstractController
{
    /**
     * @Route("/fluxactivities", name="fluxactivities")
     */
    public function index()
    {
        return $this->render('fluxactivities/fluxactivities.html.twig', [
            'title' => 'test activities',
        ]);
    }
}
