<?php

namespace tests;

use App\Models\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    /**
     * Assert that Order methods work correctly.
     * @return void
     */
    public function testFillOrderData()
    {
        $order = new Order();
        $date = new \DateTime();
        $order->setDateOrder($date);

        $this->assertEquals($order->getDateOrder(), $date);
    }
}
