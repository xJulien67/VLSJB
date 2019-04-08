<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Activity;
use App\Entity\Sport;
use App\Form\ActivityType;
use App\Repository\ActivityRepository;

class InputController extends AbstractController
{
    /**
     * @Route("/input", name="input")
     */
    public function index(Request $request, ObjectManager $manager)
    {
        //N'autorise pas l'accès si l'utilisateur n'est pas connecté
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        $activity = new Activity();

        //Une activité appartient à un utilisateur (celui connecté):
        $user = $this->getUser(); 
        $activity->setUser($user); 
        
        //création d'un formulaire avec make:form et on vient récupérer la class du fichier ActivityType        
        $form = $this->createForm(ActivityType::class, $activity);
       
        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid() ) {

            $manager->persist($activity);
            $manager->flush();

            return $this->redirectToRoute('activity_home');
        }
        
        return $this->render('input/index.html.twig', [
            'formActivity' => $form->createView(),
        ]);
    }
}
