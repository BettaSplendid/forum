<?php

namespace App\Controller;

use App\Entity\Article;

use Doctrine\ORM\EntityRepository;
use App\Helpers\EntityManagerHelper as Em;
use Doctrine\ORM\Mapping\ClassMetadata;

final class ArticlesController
{

    public function index(): void
    {
        echo ("hello articles");
    }

    public function show_all_articles()
    {
        echo ("hewwo");
        $entityManager = Em::getEntityManager();
        $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Article"));

        $Article = $repo->findAll();
        var_dump($Article);
    }

    public function show_add_article()
    {
        include './src/Views/addarticle.php';
    }


    public function add_article()
    {
        var_dump($_POST);
        $entityManager = Em::getEntityManager();
        $repo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Article"));

        $author_id = $_POST['auteur_id'];
        $author = $repo->find($author_id);

        $id_editeur = $_POST['id_editeur'];
        $editor = $repo->find($id_editeur);

        new Article($_POST['isbn'], $_POST['titre'], $_POST['resume'], $author, $editor);


    }
}
