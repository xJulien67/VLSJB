<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RecapController extends AbstractController
{
    /**
     * @Route("/recap", name="recap")
     */
    public function index()
    {
        return $this->render('recap/index.html.twig', [
            'controller_name' => 'RecapController',
        ]);
    }
}
