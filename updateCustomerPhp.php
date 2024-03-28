<?php

include_once("mysql-helper.php");
include_once("requestHelper.php");
include_once("dbconnection.php");

$table_name = "customers";


$id =queryString('id');

if ($id)
{
    
    $customer_name ='';
    $customer_address = '';
    $customer_phone = '';

    $result = getSingleRecord($table_name,$id);
	   
    if($result)
    {
        $customer_name = $result['customer_name'];
        $customer_address = $result['customer_address'];
        $customer_phone = $result['customer_phone'];
    }
    
}

if(isset($_POST['submitt']))
{   
    
    $id = fieldsValue('id');

    $customer_name = fieldsValue('customer_name');
    $customer_address = fieldsValue('customer_address');
    $customer_phone = fieldsValue('customer_phone');

    $record = array("customer_name"=>$customer_name, "customer_address"=>$customer_address,"customer_phone"=>$customer_phone);
    
	print_r($record);
	
    $isUpdated =  updateRecord($record,$table_name,$id);
    
	echo $isUpdated;

    if($isUpdated)
       header("location:customer.php");
}

?>