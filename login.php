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
            <form action="login.php" method="POST">
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

    $qry="SELECT email,password FROM user";
    $qry=mysqli_query($db_status,$qry);
   
        while($dataarr=mysqli_fetch_assoc($qry))
        {
           // echo ($dataarr['email'].$uemail);
            //echo ('<br>'.$dataarr['pass'].$upass);
           if( $uemail==$dataarr['email'] and $upass==$dataarr['password'])
           {
               echo("<H2>User Logged In Successfully<H2>");
                $flag='0';
                session_start();
                $_SESSION['email'] = $uemail;
                header("location: index.php");
            }
           
        }
       
    
    
        if($flag=='1')
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
            <h3 style="color:red;" align="center">Invalid Credentials*</h3>
                <table align="center">
                    <form action="login.php" method="POST">
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
    <h3 style="color:green;" align="center">User Login-Form</h3>
        <table align="center">
            <form action="login.php" method="POST">
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
?>