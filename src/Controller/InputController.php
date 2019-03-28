<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InputController extends AbstractController
{
    /**
     * @Route("/input", name="input")
     */
    public function index()
    {
        return $this->render('input/index.html.twig', [
            'controller_name' => 'InputController',
        ]);
    }
}
