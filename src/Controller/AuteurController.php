<?php

namespace App\Controller;

use App\Entity\auteur;

use Doctrine\ORM\EntityRepository;
use App\Helpers\EntityManagerHelper as Em;
use Doctrine\ORM\Mapping\ClassMetadata;

final class AuteurController
{
    public function index(): void
    {
        echo ("hello auteur");
    }

    public function show_all_auteurs()
    {
        echo ("hewwo");
        $entityManager = Em::getEntityManager();
        $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Auteur"));

        $Auteur = $repo->findAll();
        var_dump($Auteur);
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
    }
}
