<?php
session_start();
include_once "header.php";

?>
    <h1>All Orders</h1>

<table class="table container">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">date-order</th>
      <th scope="col">client</th>
      <th scope="col">client comment</th>
      <th>CheckBox</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($_GET as $order) {
        echo '<tr>';
        echo '<th scope="row"><a href="index.php/detail-order/?id='.$order->getId().'">'.$order->getId().'</a></th>';
        echo '<td>'.$order->getOrderState().'</td>';
        echo '<td>'.$order->getClient().'</td>';
        echo '<td>'.$order->getClientComment().'</td>';
        echo '<td><div class="form-check">
      
      <input class="form-check-input" type="checkbox"  id="check'.$order->getId().'"  ' . ($order->getOrderState() == 1 ? 'checked' : 'disabled=""') . '>
    </div></td>';
        echo '<td><div class="text-center">
    <button class="btn btn-success" id="sendorder" onclick="SentOrdre('.$order->getId().')">SendOrder</button></td>';
        echo '</tr>';
    }
    ?>
  </tbody>
</table>
<div class="text-center">
<a href="/index.php/add-orders" ><button class="btn btn-primary">Add New</button></a>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  
 function SentOrdre(id_order) {
    console.log(id_order); 
              $.ajax({
          type: "POST",
          url: "http://localhost:8001/index.php/check",
          data: { id_order: id_order },
         success: function(){
            document.getElementById('check'+id_order).checked=true;
          }, 
          error: function(){
            alert("Error updating order state.");
          }
        });
      }
    
    

</script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>