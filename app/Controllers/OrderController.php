<?php

namespace App\Controllers;

use App\Views\ViewManager;
use App\Repository\OrderRepository;

class OrderController
{
    private $or;

    public function __construct()
    {
        $this->or = new OrderRepository();
    }
    public function order()
    {
        $orders=$this->or->getOrders();

        ViewManager::renderView('home/order.php', $orders);
    }
    public function check()
    {
        $result=$this->or->sendOrder($_POST['id_order']);
        header('Content-Type: application/json');
        if ($result) {
            echo json_encode('done');
        } else {
            echo json_encode('none');
        }
    }

    public function detailsOrders($id)
    {
        $id=intval($_GET['id']);
        //var_dump($id);
        $orders=$this->or->details_Orders($id);
        //var_dump($orders);
        ViewManager::renderView('home/Details.php', $orders);
    }
}
