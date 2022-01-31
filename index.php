<?php

namespace App;
require_once('vendor/autoload.php');

session_start();



use Router\Router;
$router = new Router($_GET['url']);

$router->get("/", "App\Controller\AppController@index");

//Auteur
$router->get("/Auteur", "App\Controller\AuteurController@index");
$router->get("/Auteur-all", "App\Controller\AuteurController@show_all_auteurs");
$router->get("/Auteur-add", "App\Controller\AuteurController@show_add_auteur");
$router->post("/Auteur-add", "App\Controller\AuteurController@add_auteur");


//Editeur


//Articles
$router->get("/Articles", "App\Controller\ArticlesController@index");
$router->get("/Articles-all", "App\Controller\ArticlesController@show_all_articles");
$router->get("/Articles-add", "App\Controller\ArticlesController@show_add_article");
$router->post("/Articles-add", "App\Controller\ArticlesController@show_add_article");


$router->run();