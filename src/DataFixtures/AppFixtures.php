<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $project = new Project();
        $project->setName('test');
        $project->setFirstTechnology('test');
        $project->setSecondTechnology('test');
        $project->setDescription('test');

        $manager->persist($project);
        $manager->flush();
    }
}
