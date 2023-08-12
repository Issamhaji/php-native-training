<?php

include_once 'header.php';
?>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-9">

<form action="<?php echo 'index.php/subscribe'; ?>"  method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">fullname</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="full_name" placeholder="client name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">City</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="city" placeholder="client name">
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="username" placeholder="client name">
</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>