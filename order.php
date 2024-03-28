<?php
include_once("mysql-helper.php");
include_once("requestHelper.php");
include_once("dbconnection.php");

$price=100;

if(isset($_POST['submitt']))
{
    
     $product_name = fieldsValue('product_name');
     $product_description = fieldsValue('product_description');
     $product_quantity = fieldsValue('product_quantity');
     $product_charges = fieldsValue('product_charges');

	
	 $customer_name = fieldsValue('customer_name');
     $customer_address = fieldsValue('customer_address');
	 $customer_phone = fieldsValue('customer_phone');
    
	
	 $order_shipment_source = "DHL";
     $customer_address = fieldsValue('customer_address');
	 $TotalAmount = fieldsValue('product_charges');
	 
	 $record1 = array("product_name"=>$product_name, "product_description"=>$product_description,"product_quantity"=>$product_quantity,"product_charges"=>$product_charges);
     $record2 = array("customer_name"=>$customer_name, "customer_address"=>$customer_address,"customer_phone"=>$customer_phone);
     $record3 = array("order_shipment_source"=>$order_shipment_source, "customer_address"=>$customer_address,"TotalAmount"=>$TotalAmount);

	 addRecord($record1,'produststobemanufacture');
	 
     $isAdded =  addRecord($record2,'customers');
	 
	 addRecord($record3,'orderdetails');

		if($isAdded)
		{ 
            header("location:orderConfirmation.php"); 

		}
}
$error= '';

if(array_key_exists('error', $_GET))
    $error= $_GET['error'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Add Record Form</title>
</head>
<body> 
<?php if($error) {?>
    <div class="alert alert-danger"><?php echo $error;?></div>
<?php }?>
<div class="container">
  <h4>Product Details</h4>
  <form class="form-horizontal" action="order.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_name">Product Name :</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name" name="product_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_description">Product Description:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="product_description" placeholder="Enter Product Description" name="product_description">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="product_price">Product Price:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="product_price" value="<?php echo $price ?>" name="product_price">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_quantity">Product Quantity:</label>
      <div class="col-sm-2"> 
        <input type="text" class="form-control" id="product_quantity" placeholder="Quantity" name="product_quantity" onKeyUp="multiply()">
	  </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="product_charges">Total:</label>
      <div class="col-sm-2">          
        <input type="text" class="form-control" id="product_charges" placeholder="Total" name="product_charges">
      </div>
    </div>
	<br><br>
	<h4>Customer Details</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="customer_name">Customer Name :</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="customer_name" placeholder="Enter Name" name="customer_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="customer_address">Customer Address:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="customer_address" placeholder="Enter Address" name="customer_address">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="customer_phone">Customer Mobile:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="customer_phone" placeholder="Enter Phone" name="customer_phone">
      </div>
    </div>
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submitt">Submit</button>
      </div>
    </div>
</div>

  </form>
</div>

<script>


function multiply()
{
    a = Number(document.getElementById('product_quantity').value);
    b = Number(document.getElementById('product_price').value);
    c = a * b;

    document.getElementById('product_charges').value = c;
}


 </script>


</body>
</html>