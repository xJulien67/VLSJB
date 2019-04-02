<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Activities;
use App\Repository\ActivitiesRepository;

class InputController extends AbstractController
{
    /**
     * @Route("/input", name="input")
     */
    public function index(Request $request, ObjectManager $manager)
    {
        $activity = new Activities();

        $form = $this->createFormBuilder($activity)
                     ->add('sport')
                     ->add('activitiestype')
                     ->add('duration')
                     ->add('distance')
                     ->add('place')
                     ->add('partner')
                     ->add('averagePace')
                     ->add('averageSpeed')
                     ->add('heartRate')
                     ->getForm();
        
        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid() ) {

            $manager->persist($activity);
            $manager->flush();

            return $this->redirectToRoute('index');
        }
        
        return $this->render('input/index.html.twig', [
            'formActivity' => $form->createView(),
        ]);
    }
}
