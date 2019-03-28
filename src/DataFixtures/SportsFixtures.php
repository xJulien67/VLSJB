<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Sports;

class SportsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $sports = new sports();
        $sports->setSportname("Run");
        $manager->persist($sports);
        $manager->flush();

        $sports = new sports();
        $sports->setSportname("Swim");
        $manager->persist($sports);
        $manager->flush();

        $sports = new sports();
        $sports->setSportname("Bike");
        $manager->persist($sports);
        $manager->flush();

        $sports = new sports();
        $sports->setSportname("Muscu");
        $manager->persist($sports);
        $manager->flush();

        $sports = new sports();
        $sports->setSportname("Triathlon");
        $manager->persist($sports);
        $manager->flush();

        $sports = new sports();
        $sports->setSportname("Swimrun");
        $manager->persist($sports);
        $manager->flush();
    }
}
