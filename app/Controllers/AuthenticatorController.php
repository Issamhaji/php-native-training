<?php

namespace App\Controllers;

session_start();

use App\Views\ViewManager;
use App\Repository\UserRepository;
use App\Models\OrderModel;

class AuthenticatorController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function subscribe($data)
    {
        if (isset($_POST['submit'])) {
            $data = array(  'full_name'=> $_POST['full_name']
            ,'username'=> $_POST['username']
            ,'password'=> $_POST['password']
            ,'city'=> $_POST['city'],
        );
            //var_dump($data);
            $result = $this->repository->subscribe($data);
            var_dump($result);
            if ($result) {
                ViewManager::renderView('home/home.php');
            }
        } else {
            ViewManager::renderView('home/Subscribe.php');
        }
    }
    

    public function login()
    {
        if (isset($_POST['submit'])) {
            $data = array(
            'username'=> $_POST['username']
            ,'password'=> $_POST['password'],
        );
            $result = $this->repository->login($data);

            foreach ($result as $user) {
                //var_dump($user[1]);
                if ($user[0] === $_POST['username'] && $user[1] === $_POST['password']) {
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['roles']=$user[2];
                    break;
                }
            }
            if ($_SESSION['username']===null) {
                ViewManager::renderView('home/login.php');
                echo "Invalid username or password.";
            } else {
                ViewManager::renderView('home/home.php');
            }
        } else {
            ViewManager::renderView('home/login.php');
        }
    }
    public function logout()
    {
        session_start();
        session_destroy();
        ViewManager::renderView('home/home.php');
        exit();
    }
}
