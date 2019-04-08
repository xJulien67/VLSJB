<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Security;

/**
  * Require ROLE_ADMIN for *every* controller method in this class.
  *
  * @IsGranted("ROLE_ADMIN")
  */
class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(Security $security)
    {

      $user = $security->getUser();

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'username' => $user->getUsername(),
        ]);
    }

     /**
      * Require ROLE_ADMIN for only this controller method.
      *
      * @IsGranted("ROLE_ADMIN")
      */
    public function adminDashboard()
    {
      $this->denyAccessUnlessGranted('ROLE_ADMIN');

      // or add an optional message - seen by developers
      $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
    }
}
