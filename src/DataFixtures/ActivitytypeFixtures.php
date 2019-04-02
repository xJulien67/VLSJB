<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Activitytype;

class ActivitytypeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $activitytype = new activitytype();
        $activitytype->setActivitytype("Entrainement");
        $manager->persist($activitytype);
        $manager->flush();

        $activitytype = new activitytype();
        $activitytype->setActivitytype("Compétition");
        $manager->persist($activitytype);
        $manager->flush();

        $activitytype = new activitytype();
        $activitytype->setActivitytype("Endurance");
        $manager->persist($activitytype);
        $manager->flush();

        $activitytype = new activitytype();
        $activitytype->setActivitytype("Seuil");
        $manager->persist($activitytype);
        $manager->flush();

        $activitytype = new activitytype();
        $activitytype->setActivitytype("Fractionné");
        $manager->persist($activitytype);
        $manager->flush();
    }
}
