<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ActivitiesflowController extends AbstractController
{
    /**
     * @Route("/activitiesflow", name="activitiesflow")
     */
    public function index()
    {
        return $this->render('activitiesflow/index.html.twig', [
            'controller_name' => 'ActivitiesflowController',
        ]);
    }
}
