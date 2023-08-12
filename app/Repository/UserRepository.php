<?php

namespace App\Repository;

use App\Service\DatabaseConnection;
use App\Models\OrderModel;
use App\Models\OrderLinesModel;
use App\Models\AbstractUser;
use App\Models\User;

class UserRepository
{
    public function subscribe($data)
    {
        try {
            $conn = DatabaseConnection::getInstance();
            $data['roles'] = 'ROLE_USER';
            $stmt = $conn->prepare("INSERT INTO clients (full_name, username , password ,city,roles) VALUES (:full_name, :username,:password,:city,:roles)");
            $stmt->bindParam(':full_name', $data['full_name']);
            $stmt->bindParam(':username', $data['username']);
            $stmt->bindParam(':password', $data['password']);
            $stmt->bindParam(':city', $data['city']);
            $stmt->bindParam(':roles', $data['roles']);

            return $stmt->execute();
        } catch (Exception $e) {
            // handle any exceptions
            echo 'Error creating order: ' . $e->getMessage();
        }
    }

    public function login()
    {
        try {
            $conn = DatabaseConnection::getInstance();
            $sql = "SELECT * FROM clients";
            $result = $conn->query($sql);
            $orders = [];
           
            while ($row = $result->fetch()) {
                $order = [$row['username'],$row['password'],$row['roles']];
                array_push($orders, $order);
            }

            return $orders;
        } catch (Exception $e) {
            // handle any exceptions
            echo 'Error creating order: ' . $e->getMessage();
        }
    }
}
