<?php

namespace App\Models;

/** Encapsulate `users` table records. */
class User extends AbstractUser
{
    /** @var string */
    private $fullName;

    /** @var int */
    private $numberOfFollowings;

    /** @var string */
    private $city;

    /** @var array<Order> */
    private $orders;

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     * @return self
     */
    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfFollowings(): int
    {
        return $this->numberOfFollowings;
    }

    /**
     * @param int $numberOfFollowings
     */
    public function setNumberOfFollowings(int $numberOfFollowings): void
    {
        $this->numberOfFollowings = $numberOfFollowings;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return array
     */
    public function getOrders(): array
    {
        return $this->orders;
    }

    public function addOrder(Order $order)
    {
        if (!in_array($order, $this->orders)) {
            $this->orders[] = $order;
        }
    }

    /**
     * @param array $orders
     */
    public function setOrders(array $orders): void
    {
        $this->orders = $orders;
    }
}
