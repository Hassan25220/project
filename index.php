<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Printing Press</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div style="display: flex; justify-content:center;" class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Printing Press Management System</a>
      </div>
    </div>
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="employee.php">Employees</span></a>
        </li>
        <li><a href="customer.php">Customers</a>
        </li>
        <li><a href="productDetails.php">Product Details</a>
        </li>
        <li><a href="orderDetails.php">Orders Details</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          session_start(); 
          if(!empty($_SESSION['email']))
          {
            echo '<li><a href="logout.php">Log-Out</a></li>';
          }
          else {
            echo '<li><a href="login.php">Log-In</a></li>';          
          }
        ?>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img src="images/banner-1.jpg" height="300" width="1130">
      </div>
    </div>
    <h1 class="product_text">PRODUCTS WE OFFER</h1>

    <div class="row">
      <div class="col-md-3 border">
        <h4>Books</h4>
        <a href="order.php">
          <img src="images/img-1.jpg" height="200" width="200">
        </a>
      </div>
      <div class="col-md-3 border">
        <h4>Cards</h4>
        <a href="order.php">
          <img src="images/img-2.jpg" height="200" width="200">
        </a>
      </div>
      <div class="col-md-3 border">
        <h4>Shirts</h4>
        <a href="order.php">
          <img src="images/img-3.jpg" height="200" width="200">
        </a>
      </div>
      <div class="col-md-3 border">
        <h4>Brochures</h4>
        <a href="order.php">
          <img src="images/img-4.jpg" height="200" width="200">
        </a>
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col-md-3 border">
        <h4>Envelops</h4>
        <a href="order.php">
          <img src="images/img-5.jpg" height="200" width="200">
        </a>

      </div>
      <div class="col-md-3 border">
        <h4>Boxes</h4>
        <a href="order.php">
          <img src="images/img-6.jpg" height="200" width="200">
        </a>
      </div>
      <div class="col-md-3 border">
        <h4>Calanders</h4>
        <a href="order.php">
          <img src="images/img-7.jpg" height="200" width="220">
        </a>
      </div>
      <div class="col-md-3 border">
        <h4>Flexes</h4>
        <a href="order.php">
          <img src="images/img-8.jpg" height="200" width="200">
        </a>
      </div>
    </div>
    <br><br>

    <div class="row">
      <div class="col-md-12">
        <footer class="f">
          <p class="p">&copy; 2022, Printing Press Management</p>
        </footer>
      </div>
    </div>
  </div>
</body>

</html>