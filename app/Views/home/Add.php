<?php

include_once "header.php";
?>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-9">
    <form action="<?php echo 'index.php/add-orders'; ?>"  method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">New Cleint</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="client" placeholder="client name">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Client Comment</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="client_comment" rows="3"></textarea>
</div>
  <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>






