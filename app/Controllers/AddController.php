<?php

namespace App\Controllers;

use App\Views\ViewManager;
use App\Repository\OrderRepository;
use App\Models\OrderModel;

class AddController
{
    private $OrderRepository;

    public function __construct()
    {
        $this->OrderRepository = new OrderRepository();
    }

    public function add($data)
    {
        if (isset($_POST['submit'])) {
            $data = array(  'client_comment' => $_POST['client_comment'] ,'client' => $_POST['client'],);

            $result = $this->OrderRepository->addOrder($data);
            if ($result) {
                header("Location: index.php/list-orders");
            }
        } else {
            ViewManager::renderView('home/Add.php');
        }
    }
}

