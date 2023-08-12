<?php

namespace App\Controllers;

use App\Views\ViewManager;

class HomeController
{
    public function home()
    {
        ViewManager::renderView('home/home.php');
    }
}
