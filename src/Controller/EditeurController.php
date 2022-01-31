<?php

namespace App\Controller;
require_once 'vendor/autoload.php';

use App\Entity\Editeur;

use Doctrine\ORM\EntityRepository;
use App\Helpers\EntityManagerHelper as Em;
use Doctrine\ORM\Mapping\ClassMetadata;

use Faker\Factory;

final class EditeurController
{
    public function index(): void
    {
        echo ("hello Editeur");
    }

    public function show_all_editeurs()
    {
        echo ("Herro");
        $entityManager = Em::getEntityManager();
        $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Editeur"));

        $Editeur = $repo->findAll();
        var_dump($Editeur);
        echo ("Herro");
    }

    public function show_add_editeur()
    {
        include './src/Views/add_editeur.php';
    }


    public function add_editeur()
    {
        $entityManager = Em::getEntityManager();
        $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Editeur"));

        $Editeur = new Editeur($_POST['nom_editeur']);

        var_dump($Editeur);
        $entityManager = Em::getEntityManager();
        $entityManager->persist($Editeur);
        $entityManager->flush();
    }

    public function add_random_editeur() {
        for ($i=0; $i < 6; $i++) { 
            $faker = Factory::create();
            $entityManager = Em::getEntityManager();
            $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Editeur"));
    
            $Editeur = new Editeur($faker->lastname);
    
            $entityManager = Em::getEntityManager();
            $entityManager->persist($Editeur);
            $entityManager->flush();
        }

    }
}
