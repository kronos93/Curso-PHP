<?php

namespace App\Controllers;
use App\Models\Article;
use App\Libraries\View;
class PageController
{
    public function index()
    {
        $articles = Article::all();
        View::render('pages/index',compact('articles'));
    }
}