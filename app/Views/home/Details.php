<?php
session_start();
include_once 'header.php';

?>

<h1>All Orders</h1>

<table class="table container">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">date-order</th>
      <th scope="col">client</th>
      <th scope="col">order_state</th>
      <th scope="col">client comment</th>
      <th scope="col">order_id</th>
      <th scope="col">reference</th>
      <th scope="col">product Label</th>
      <th scope="col">price</th>
      <th>CheckBox</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php

     for ($i=0;$i<count($_GET)-1 ;$i++) {
         $order = $_GET[$i]['orders'];
         $orderLine = $_GET[$i]['ordersLines'];

         echo '<tr>';
         echo '<th scope="row">'.$order->getId().'</th>';
         echo '<td>'.$order->getDateOrder().'</td>';
         echo '<td>'.$order->getClient().'</td>';
         echo '<td>'.$order->getOrderState().'</td>';
         echo '<td>'.$order->getClientComment().'</td>';

         echo '<td>'.$orderLine->getOrderId().'</td>';
         echo '<td>'.$orderLine->getReference().'</td>';
         echo '<td>'.$orderLine->getProductLabel().'</td>';
         echo '<td>'.$orderLine->getPrice().'</td>';

         echo '</tr>';
     }
    ?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>