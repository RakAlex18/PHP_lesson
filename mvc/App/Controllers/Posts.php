<?php

namespace App\Controllers;

use App\Models\Post;
use Core\View;

class Posts {

    public function index()
    {   
        View::render('posts/index.php');
    }

    public function show()
    {
        $news = Post::getAll();
        View::render('posts/show.php', [
            'title' => 'Новости',
            'posts' => $news
        ]);
    }
    public function create()
    {
        View::render('posts/create.php');
    }
}