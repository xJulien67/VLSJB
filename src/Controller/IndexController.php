<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


use App\Entity\Activity;
use App\Form\ActivityType;
use App\Repository\ActivityRepository;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        $activity = new activity();
        //$activityRepository->findAll();
        $user = $this->getUser();
        $userId = $user->getId();

        return $this->render('index/index.html.twig', [
            'id' => $userId,
        ]);
    }
}
