<?php


if(isset($_POST['login']))
{
    $uemail=$_POST['eemail'];
    $upass=$_POST['epassword'];
    $flag='1';
    if(empty($uemail)||empty($upass))
    {
        echo('
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h3 style="color:red;" align="center">Please Fill required Fields*</h3>
        <table align="center">
            <form action="registrationform.php" method="POST">
                <tr>
                    <td>
                        <label for="email">Enter Your Email*</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" required name="eemail" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password*</label>
                    </td>
                </tr>
    
                <tr>
                    <td>
                        <input type="password" name="epassword" id="epassword" required>
                    </td>
                </tr>
    
                <tr>
                    <td>
                        <input type="submit" value="login" name="login">
                        <input type="reset" value="Clear Data">
                    </td>
                </tr>
    
    
    
    
            </form>
        </table>
        
    </body>
    </html>
    ');
    }

    $hostname='127.0.0.1';
    $user='root';
    $pass='';
    $db_name='printing_press_management';
    $upass=md5($upass);

    $db_status=mysqli_connect($hostname,$user,$pass,$db_name);

    $qry="Insert INTO user( email,password) values('$uemail','$upass')";
    $qry=mysqli_query($db_status,$qry);
   
       if($qry)
       {
           echo('<H3>User Registered<H3>');
           echo('<a href="login.php">Click here to login</a>');
       }

   
}
else
{
    echo('
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h3 style="color:green;" align="center">Registration Form</h3>
        <table align="center">
            <form action="registrationform.php" method="POST">
                <tr>
                    <td>
                        <label for="email">Enter Your Email</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" required name="eemail" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                </tr>
    
                <tr>
                    <td>
                        <input type="password" name="epassword" id="epassword" required>
                    </td>
                </tr>
    
                <tr>
                    <td>
                        <input type="submit" value="Register" name="login">
                        <input type="reset" value="Clear Data">
                    </td>
                </tr>
    
    
    
    
            </form>
        </table>
        
    </body>
    </html>
    ');


}



?>





