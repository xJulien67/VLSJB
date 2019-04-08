<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Form\ActivityType;
use App\Repository\ActivityRepository;
use App\Repository\SportRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class ActivityController extends AbstractController
{
    /**
     * @Route("/", name="activity_home", methods={"GET"})
     */
    public function home(ActivityRepository $activityRepository): Response
    {
        //N'autorise pas l'accès si l'utilisateur n'est pas connecté
        $this->denyAccessUnlessGranted('ROLE_USER');

        $user = $this->getUser();//récupère l'utilisateur connecté
        $userId = $user->getId();//récupère l'id de l'utilisateur connecté

        //findAllByUserId() renvoie toutes les activités que l'utilisateur connecté possède
        return $this->render('activity/home.html.twig', [
            //'activities' => $activityRepository->findAll(),
            'activities' => $activityRepository->findAllByUserId($userId),
        ]);
    }

    /**
     * @Route("/activity/activities", name="activity_activities", methods={"GET"})
     */
    public function activities(ActivityRepository $activityRepository): Response
    {
        //N'autorise pas l'accès si l'utilisateur n'est pas connecté
        $this->denyAccessUnlessGranted('ROLE_USER');

        $user = $this->getUser();//récupère l'utilisateur connecté
        $userId = $user->getId();//récupère l'id de l'utilisateur connecté
        
        //findAllByUserId() renvoie toutes les activités que l'utilisateur connecté possède
        return $this->render('activity/activities.html.twig', [
            //'activities' => $activityRepository->findAll(),
            'activities' => $activityRepository->findAllByUserId($userId),
        ]);
    }

    

    /**
     * @Route("/activity/recap", name="activity_recap", methods={"GET"})
     */
    public function recap(ActivityRepository $activityRepository, SportRepository $sportRepository): Response
    {
        //N'autorise pas l'accès si l'utilisateur n'est pas connecté
        $this->denyAccessUnlessGranted('ROLE_USER');

        $user = $this->getUser();//récupère l'utilisateur connecté
        $userId = $user->getId();//récupère l'id de l'utilisateur connecté

        return $this->render('activity/recap.html.twig', [
            'activities' => $activityRepository->findAllByUserId($userId),
            'sports' => $sportRepository->findAll(),
        ]);
    }

    /**
     * @Route("/activity/recap/{id}", name="activity_recap_sport", methods={"GET"})
     */
    public function recapSport(ActivityRepository $activityRepository, SportRepository $sportRepository, int $id): Response
    {
        //N'autorise pas l'accès si l'utilisateur n'est pas connecté
        $this->denyAccessUnlessGranted('ROLE_USER');

        $user = $this->getUser();//récupère l'utilisateur connecté
        $userId = $user->getId();//récupère l'id de l'utilisateur connecté
        //app.request.get('id');
        //$request = $this->getRequest();
        //$id = $request->attributes->get('id');
        //$currentRoute = $request->attributes->get('_route');
        

        return $this->render('activity/recap_sport.html.twig', [
            'activities' => $activityRepository->findByUserIdAndSportId($userId, $id), //$id est récupérer dans l'url (il s'agit du sportId)
            'sports' => $sportRepository->findAll(),
        ]);
    }

    



    /**
     * @Route("/activity/new", name="activity_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $activity = new Activity();
        $form = $this->createForm(ActivityType::class, $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($activity);
            $entityManager->flush();

            return $this->redirectToRoute('activity_index');
        }

        return $this->render('activity/new.html.twig', [
            'activity' => $activity,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/activity/{id}", name="activity_show", methods={"GET"})
     */
    public function show(Activity $activity): Response
    {
        return $this->render('activity/show.html.twig', [
            'activity' => $activity,
        ]);
    }

    /**
     * @Route("/activity/{id}/edit", name="activity_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Activity $activity): Response
    {
        $form = $this->createForm(ActivityType::class, $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('activity_show', [
                'id' => $activity->getId(),
            ]);
        }

        return $this->render('activity/edit.html.twig', [
            'activity' => $activity,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/activity/{id}", name="activity_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Activity $activity): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activity->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($activity);
            $entityManager->flush();
        }

        return $this->redirectToRoute('activity_activities');
    }
}
