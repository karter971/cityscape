<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $Catergory = [
            1 => [
                'titre' => 'Page',
                '' => '',
                '....' => '',
            ],
            2 => [
                'titre' => 'Project',
                '' => '',
            ],
            3 => [   'titre' => '',
        ]
        ];
        $manager->flush();
    }
}
