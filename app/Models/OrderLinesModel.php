<?php

namespace App\Models;

use App\Repository;

class OrderLinesModel
{
    public $id;
    public $order_id;
    public $reference;
    public $product_label;
    public $price;

    public function __construct($id, $order_id, $reference, $product_label, $price)
    {
        $this->id = $id;
        $this->order_id = $order_id;
        $this->reference = $reference;
        $this->product_label = $product_label;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getOrderId()
    {
        return $this->order_id;
    }

    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    public function getProductLabel()
    {
        return $this->product_label;
    }

    public function setProductLabel($product_label)
    {
        $this->product_label = $product_label;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
