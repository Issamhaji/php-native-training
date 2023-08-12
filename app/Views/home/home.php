<?php
session_start();
include_once "header.php";


?>

<h1>Home app !</h1>
<h2>Welcome, <?php echo $_SESSION['username']; ?>! <?php echo 'You role is'. $_SESSION['roles']; ?></h2>
<div class="dd">
<a href="/index.php/logout"><button  class="btn btn-primary">Logout</button></a></div>