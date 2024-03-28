<?php

include_once("mysql-helper.php");
include_once("requestHelper.php");
include_once("dbconnection.php");

$table_name = "employee";


$id =queryString('id');

if ($id)
{
    
    $emp_name ='';
    $emp_des = '';
    $emp_salary = '';

    $result = getSingleRecord($table_name,$id);
	   
    if($result)
    {
        $employee_name = $result['employee_name'];
        $employee_designation = $result['employee_designation'];
        $employee_salary = $result['employee_salary'];
    }
    
}

if(isset($_POST['submitt']))
{   
    
    $id = fieldsValue('id');

    $employee_name = fieldsValue('employee_name');
    $employee_designation = fieldsValue('employee_designation');
    $employee_salary = fieldsValue('employee_salary');

    $record = array("employee_name"=>$employee_name, "employee_designation"=>$employee_designation,"employee_salary"=>$employee_salary);
    
	print_r($record);
	
    $isUpdated =  updateRecord($record,$table_name,$id);
    
	echo $isUpdated;

    if($isUpdated)
       header("location:employee.php");
}

?>