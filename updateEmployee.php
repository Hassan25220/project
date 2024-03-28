<?php

include_once("updateEmployeePhp.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Update Record Form</title>
</head>
<body>
<div class="container">
  <h2>Update Employee Record</h2>
  <form class="form-horizontal" action="updateEmployee.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <div class="form-group">
      <label class="control-label col-sm-2" for="emp_name">Employee Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="emp_name"name="employee_name" value="<?php echo $employee_name; ?>">
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-2" for="emp_desig">Employee Designation:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="emp_desig" name="employee_designation" value="<?php echo $employee_designation; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Employee_Salary">Employee Salary:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Employee_Salary" name="employee_salary" value="<?php echo $employee_salary; ?>">
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
