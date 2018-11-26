<?php

namespace App\Controllers;

use Core\View;
use App\Models\User;
class Users
{

    public function index()
    {
        View::render('user/index.php');
    }

    public function show()
    {
        $users = User::getAll();
        View::render('users/show.php', [
            'title' => 'Пользователи',
            'users' => $users
        ]);
    }
}

