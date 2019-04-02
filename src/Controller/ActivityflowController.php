<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ActivityflowController extends AbstractController
{
    /**
     * @Route("/activityflow", name="activityflow")
     */
    public function index()
    {
        return $this->render('activityflow/index.html.twig', [
            'controller_name' => 'ActivityflowController',
        ]);
    }
}
