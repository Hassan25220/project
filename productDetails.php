<?php
include_once("productDetailsPhp.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">

    <h1>Customer Order Details</h1>
    <br><br>
    <table class="table table-bordered  table-hover">

      <thead>
        <tr>
          <th>Product Id</th>
          <th>Product Name</th>
          <th>Product Description</th>
          <th>Product Quantity</th>
          <th>Product Charges</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($products as $product) { ?>
          <tr>
            <td><?php echo $product['id'] ?></td>
            <td><?php echo $product['product_name'] ?></td>
            <td><?php echo $product['product_description'] ?></td>
            <td><?php echo $product['product_quantity'] ?> </td>
            <td><?php echo $product['product_charges'] ?> </td>
          </tr>
        <?php  } ?>
      </tbody>
    </table>
  </div>