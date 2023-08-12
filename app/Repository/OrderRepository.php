<?php

namespace App\Repository;

use App\Service\DatabaseConnection;
use App\Models\OrderModel;
use App\Models\OrderLinesModel;

class OrderRepository
{
    public function getOrders(): array
    {
        $conn = DatabaseConnection::getInstance();
        $sql = "SELECT * FROM orders";
        $result = $conn->query($sql);
        $orders = [];

        while ($row = $result->fetch()) {
            $order = new OrderModel($row['id'], $row['date_order'], $row['client'], $row['order_state'], $row['client_comment']);
            array_push($orders, $order);
        }

        return $orders;
    }


    public function addOrder($data)
    {
        try {
            $conn = DatabaseConnection::getInstance();
            $stmt = $conn->prepare("INSERT INTO orders (date_order, client_comment,client) VALUES (now(), :client_comment,:client)");
            $stmt->bindParam(':client_comment', $data['client_comment']);
            $stmt->bindParam(':client', $data['client']);

            return $stmt->execute();
        } catch (Exception $e) {
            // handle any exceptions
            echo 'Error creating order: ' . $e->getMessage();
        }
    }
    public function sendOrder($id_order)
    {
        try {
            $conn = DatabaseConnection::getInstance();
            $sql = "UPDATE orders SET order_state = 1 WHERE id = ?";
            $query = $conn->prepare($sql);
            $query->bindValue(1, $id_order);
            $query->execute();
        } catch (Exception $e) {
            return $e->getMessage();
        }

        // echo 'heyyy';
        return ($query->errorCode() === "00000");
    }

    public function details_Orders($id): array
    {
        $conn = DatabaseConnection::getInstance();
        $sql = "SELECT *
        FROM orders
        JOIN order_lines ON orders.id = order_lines.order_id
        WHERE orders.id = {$id}
        ";
        $result = $conn->query($sql);

        // loop through the results and store them in an array of objects
        $data = array();
        while ($row = $result->fetch()) {
            $order = new OrderModel($row['id'], $row['date_order'], $row['client'], $row['order_state'], $row['client_comment']);
            $orderLine = new OrderLinesModel($row['id'], $row['order_id'], $row['reference'], $row['product_label'], $row['price']);
            $x=array(
                    'orders'=> $order,
                    'ordersLines'=>$orderLine
                );

            $data[]=$x;
        }

        return $data;
    }
}


