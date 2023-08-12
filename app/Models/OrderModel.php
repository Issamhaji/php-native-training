<?php

namespace App\Models;

use App\Repository;

class OrderModel
{
    public $id;
    public $date_order;
    public $client;
    public $order_state;
    public $client_comment;

    public function __construct($id, $date_order, $client, $order_state, $client_comment)
    {
        $this->id = $id;
        $this->date_order = $date_order;
        $this->client = $client;
        $this->order_state = $order_state;
        $this->client_comment = $client_comment;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDateOrder()
    {
        return $this->date_order;
    }

    public function setDateOrder($date_order)
    {
        $this->date_order = $date_order;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;
    }

    public function getOrderState()
    {
        return $this->order_state;
    }

    public function setOrderState($order_state)
    {
        $this->order_state = $order_state;
    }

    public function getClientComment()
    {
        return $this->client_comment;
    }

    public function setClientComment($client_comment)
    {
        $this->client_comment = $client_comment;
    }
}
