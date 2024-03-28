<?php
include_once("mysql-helper.php");
include_once("requestHelper.php");
include_once("dbconnection.php");



if(isset($_POST['submitt']))
{

     $customer_name = fieldsValue('customer_name');
     $customer_address = fieldsValue('customer_address');
     $customer_phone = fieldsValue('customer_phone');
    
    
     $record = array("customer_name"=>$customer_name, "customer_address"=>$customer_address,"customer_phone"=>$customer_phone);
        
    $isAdded =  addRecord($record,'customers');
     
	 print_r($record);
    if($isAdded)     
        header("location:customer.php"); 
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
  <h2>Please Enter Your Details To Place Order</h2>
  <form class="form-horizontal" action="addCustomer.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="cus-name">Customer Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cus-name" placeholder="Enter Name" name="customer_name">
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-2" for="customer_address">Customer Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="customer_address" placeholder="Enter Customer Address" name="customer_address">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="customer_phone">Customer Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="customer_phone" placeholder="Enter Customer Phone Number" name="customer_phone">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submitt">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>