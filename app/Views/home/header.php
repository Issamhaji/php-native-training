<?php
  if ($_SESSION['username']!==null) {
      $style="display:none;";
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Custom CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>

      h1 ,h2 ,.dd{
        text-align: center;
        margin-top:20px;
        margin-bottom: 20px;
        padding:20px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar bg-primary navbar-expand-lg " data-bs-theme="dark"  >
      <div class="container-fluid">
        <a class="navbar-brand" href="/">PHP-TRAINIGN-2023</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <?php if ($_SESSION['roles']==='ROLE_ADMIN') {
    echo '<a class="nav-link" href="/index.php/list-orders">List All orders</a>';
}
            ?>
          </div>
        </div>
        <div class="d-flex">
        <div class="collapse navbar-collapse p-1" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="/index.php/subscribe" id="sub" style="<?php echo $style; ?>">Subscribe</a>
          </div>
        </div>
        <div class="collapse navbar-collapse p-1" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="/index.php/login" id="log" style="<?php echo $style; ?>" >Login</a>
          </div>
        </div>
        </div>
      </div>
    </nav>
    
