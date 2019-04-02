<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Sport;

class SportFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $sport = new sport();
        $sport->setSportname("Run");
        $manager->persist($sport);
        $manager->flush();

        $sport = new sport();
        $sport->setSportname("Swim");
        $manager->persist($sport);
        $manager->flush();

        $sport = new sport();
        $sport->setSportname("Bike");
        $manager->persist($sport);
        $manager->flush();

        $sport = new sport();
        $sport->setSportname("Muscu");
        $manager->persist($sport);
        $manager->flush();

        $sport = new sport();
        $sport->setSportname("Triathlon");
        $manager->persist($sport);
        $manager->flush();

        $sport = new sport();
        $sport->setSportname("Swimrun");
        $manager->persist($sport);
        $manager->flush();
    }
}
