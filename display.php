<?php
require 'connection.php';
session_start();
$conn=Connect();
$registration_id = mysqli_real_escape_string($conn, $_POST['registration_id']);
$query= "SELECT * FROM register WHERE registration_id='$registration_id' ";
$records=mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>DISPLAY</title>
    </head>
    <body>
   
        <style>
            body { background-color :#98FB98;
		 background-image:url("regi.jpg")
            }
        </style>
        <form>
             <br><br><br> <br><br><br><br><br><br><br><br><br><center>
	      <center><h1>Customer Details</h1></center>
            <table width="auto" height="auto" border="2" cellpadding="2" cellspacing="2" top="100px">
                <tr>
                    <th>registration_id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>phone</th>
                    
					
                   
                </tr>
				
                <?php
                while($cases=$records->fetch_assoc( ))
                {
                   echo "<tr>";
                    echo "<td>" .$cases['registration_id']."</td>";
                    echo "<td>" .$cases['name']."</td>";
                    echo "<td>" .$cases['email']."</td>";
                    echo "<td>" .$cases['password']."</td>";
                    echo "<td>" .$cases['phone']."</td>";
                  
                 echo "</tr>";
                   
                }
                
                ?>
            </table>
        </form><br>
		
		<a href="output.html"><button type="button" value="button"><h3>CONFIRM YOUR HALL</button></a>



    </body>
</html>