<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Activitiestype;

class ActivitiestypeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $activitiestype = new activitiestype();
        $activitiestype->setActivitiestype("Entrainement");
        $manager->persist($activitiestype);
        $manager->flush();

        $activitiestype = new activitiestype();
        $activitiestype->setActivitiestype("Compétition");
        $manager->persist($activitiestype);
        $manager->flush();

        $activitiestype = new activitiestype();
        $activitiestype->setActivitiestype("Endurance");
        $manager->persist($activitiestype);
        $manager->flush();

        $activitiestype = new activitiestype();
        $activitiestype->setActivitiestype("Seuil");
        $manager->persist($activitiestype);
        $manager->flush();

        $activitiestype = new activitiestype();
        $activitiestype->setActivitiestype("Fractionné");
        $manager->persist($activitiestype);
        $manager->flush();
    }
}
