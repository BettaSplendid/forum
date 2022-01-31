<?php

namespace App;
require_once('vendor/autoload.php');

session_start();



use Router\Router;
$router = new Router($_GET['url']);

$router->get("/", "App\Controller\AppController@index");

//Auteur
$router->get("/Auteur", "App\Controller\AuteurController@add_random_auteur");
$router->get("/Auteur-all", "App\Controller\AuteurController@show_all_auteurs");
$router->get("/Auteur-add", "App\Controller\AuteurController@show_add_auteur");
$router->post("/Auteur-add", "App\Controller\AuteurController@add_auteur");

//Editeur
$router->get("/Editeur", "App\Controller\EditeurController@add_random_editeur");
$router->get("/Editeur-all", "App\Controller\EditeurController@show_all_Editeurs");
$router->get("/Editeur-add", "App\Controller\EditeurController@show_add_Editeur");
$router->post("/Editeur-add", "App\Controller\EditeurController@add_Editeur");

//article
$router->get("/article", "App\Controller\ArticleController@index");
$router->get("/article-all", "App\Controller\ArticleController@show_all_article");
$router->get("/article-add", "App\Controller\ArticleController@show_add_article");
$router->post("/article-add", "App\Controller\ArticleController@add_article");


$router->run();