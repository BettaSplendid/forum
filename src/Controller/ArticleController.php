<?php

namespace App\Controller;

use App\Entity\Article;

use Doctrine\ORM\EntityRepository;
use App\Helpers\EntityManagerHelper as Em;
use Doctrine\DBAL\Types\VarDateTimeImmutableType;
use Doctrine\ORM\Mapping\ClassMetadata;
use Exception;

final class articleController
{

    public function index(): void
    {
        echo ("hello article");
    }

    public function show_all_article()
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
        $repo_auteur = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Auteur"));
        $repo_editeur = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Editeur"));

        try {
            $author_id = htmlentities(strip_tags($_POST['auteur_id']));
            $author_id = $_POST['auteur_id'];
            $author = $repo_auteur->find($author_id);
        } catch (\Throwable $th) {
            echo $th->getMessage();
            die();
        }


        echo ("after first try");
        var_dump($author_id);


        try {
            $id_editeur = htmlentities(strip_tags($_POST['id_editeur']));
            $id_editeur = $_POST['id_editeur'];
            $editor = $repo_editeur->find($id_editeur);
        } catch (\Throwable $th) {
            echo $th->getMessage();
            die();
        }


        $articlebb = new Article($_POST['isbn'], $_POST['titre'], $_POST['resume'], $author, $editor);
        $entityManager->persist($articlebb);
        $entityManager->flush();
    }

    public function delete_article($id_article)
    {

        $id_article = preg_replace('/[^A-Za-z0-9\-]/', '', $id_article);
        $id_article = (int) $id_article;
        echo ("bla");
        $entityManager = Em::getEntityManager();
        $repos = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Article"));

        try {
            $article_to_delete = $repos->find($id_article);
            $entityManager->remove($article_to_delete);
            $entityManager->flush();
        } catch (\Throwable $th) {
            echo $th->getMessage();
            die();
        }
    }
}
