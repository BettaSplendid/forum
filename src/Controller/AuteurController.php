<?php

namespace App\Controller;
require_once 'vendor/autoload.php';

use App\Entity\Auteur;

use Doctrine\ORM\EntityRepository;
use App\Helpers\EntityManagerHelper as Em;
use Doctrine\ORM\Mapping\ClassMetadata;

use Faker\Factory;

final class AuteurController
{
    public function index(): void
    {
        echo ("hello Auteur");
    }

    public function show_all_auteurs()
    {
        echo ("hewwo");
        $entityManager = Em::getEntityManager();
        $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Auteur"));

        $Auteur = $repo->findAll();
        var_dump($Auteur);
        echo ("hewwo");
    }

    public function show_add_auteur()
    {
        include './src/Views/add_auteur.php';
    }


    public function add_auteur()
    {
        $entityManager = Em::getEntityManager();
        $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Auteur"));

        $Auteur = new Auteur($_POST['nom_auteur']);

        var_dump($Auteur);
        $entityManager = Em::getEntityManager();
        $entityManager->persist($Auteur);
        $entityManager->flush();
    }

    public function add_random_auteur() {
        for ($i=0; $i < 6; $i++) { 
            $faker = Factory::create();
            $entityManager = Em::getEntityManager();
            $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Auteur"));
    
            $Auteur = new Auteur($faker->lastname);
    
            $entityManager = Em::getEntityManager();
            $entityManager->persist($Auteur);
            $entityManager->flush();
        }

    }
}
