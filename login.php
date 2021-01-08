<?php
require 'connection.php';
session_start();
if (isset($_POST['login'])) 
{
    $conn=Connect();
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $result = mysqli_query($conn, "SELECT * FROM register WHERE email = '" . $email. "' and password = '" . $password . "' ");

    if ($row = mysqli_fetch_array($result)) 
    {
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        header("Location:search 2.html");
    } 
    else 
    {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <script type="text/javascript">
        
	
    </script>
    <body>
        <style>
            body{
                       background-color: white;
	       background-image: url("a3.jpg") ;
	       background-position: center;
                      
                       background-size: cover;			   
                   }

	h4,h5{
		color:white;
    		}
	a{
		color:#f01a1a;
		}
            img{ float: left;}
        </style>
        <form action="" method="post">
                <div class="loginbox" color="rgba(128, 46, 93, 0.3)">            
                    <h2><mark>LOGIN</mark></h2>
                    <h4>Email</h4>
                    <input type="text" name="email" placeholder="abc@gmail.com" required>
                    <h4>Password</h4>
                    <input type="password" name="password" placeholder="*********" required><br><br>
                    <button type="submit" name="login"  value="Login" class="btn">LOGIN</button><br><br>
            	    <a href="register.html" style="font-color:white">register now -></a>
                </div>
        </form>
     </body>
</html>