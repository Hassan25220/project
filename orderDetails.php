<?php 

include_once("orderDetailsPhp.php");



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  
   <div class="container">
   
    <h1>Order Details</h1>
	<br><br>
      <table class="table table-bordered  table-hover">
       
        <thead>
            <tr>
                <th>Order Id</th>
                <th>Shipment Source</th>
                <th>Customer Address</th>
                <th >Total Charges</th>
            </tr>
        </thead>
        <tbody>
        <?php

        foreach($orders as $order)
        {?>
              <tr>
                <td ><?php echo $order['id'] ?></td>
                <td><?php echo $order['order_shipment_source'] ?></td>
                <td><?php echo $order['customer_address'] ?></td>
                <td><?php echo $order['TotalAmount'] ?> </td> 
              </tr>
        <?php  }?>
        </tbody>
        </table>
    </div>