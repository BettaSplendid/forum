<?php

namespace App\Controller;
require_once 'vendor/autoload.php';

use App\Entity\Visitor;

use Doctrine\ORM\EntityRepository;
use App\Helpers\EntityManagerHelper as Em;
use Doctrine\ORM\Mapping\ClassMetadata;


final class VisitorController
{
    public function index(): void
    {
        echo ("hello Visitor");
    }

    public function show_all_Visitors()
    {
        echo ("Herro");
        $entityManager = Em::getEntityManager();
        $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Visitor"));

        $Visitor = $repo->findAll();
        var_dump($Visitor);
        echo ("Herro");
    }

    public function show_add_Visitor()
    {
        include './src/Views/add_Visitor.php';
    }


    public function add_Visitor()
    {
        $entityManager = Em::getEntityManager();
        $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Visitor"));

        $Visitor = new Visitor($_POST['nom_Visitor']);

        var_dump($Visitor);
        $entityManager = Em::getEntityManager();
        $entityManager->persist($Visitor);
        $entityManager->flush();
    }

}
