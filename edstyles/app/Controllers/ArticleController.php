<?php
namespace App\Controllers;
use App\Models\Article;
use App\Libraries\View;
class ArticleController
{
    public function index ()
    {
        $articles = Article::all();
        View::render('articles/index',compact('articles')); //Crear una arreglo con la llave de las coincidencias de parametro con variables
    }
}
