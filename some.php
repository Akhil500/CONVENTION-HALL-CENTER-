<?php
require 'connection.php';
session_start();
if (isset($_POST['login'])) 
{
    $conn=Connect();
    $inn = mysqli_real_escape_string($conn, $_POST['inn']);
    $out1 = mysqli_real_escape_string($conn, $_POST['out1']);
	$id1 = mysqli_real_escape_string($conn, $_POST['id1']);
    $result = mysqli_query($conn, "SELECT * FROM book WHERE inn = '" . $inn. "' and out1 = '" . $out1 . "' and id1 = '" . $id1 . "' ");

    if ($row = mysqli_fetch_array($result)) 
    {
        $_SESSION['inn'] = $row['inn'];
        $_SESSION['out1'] = $row['out1'];
		$_SESSION['id1'] = $row['id1'];
       # print('incoret msg');
	   echo '<script type="text/javascript">
	    window.onload=function() { alert("HALL ON THAT DATE IS ALREADY BOOKED");}
		header("Location:search 2.html");
		</script>';
		
		
    } 
    else 
    {
        $query   = "INSERT into book (inn,out1,id1) VALUES('" . $inn . "','" . $out1 . "','" . $id1 . "')";

             $success = $conn->query($query);

               if (!$success) 
				{
					die("Couldn't enter data: ".$conn->error);
				}
				echo '<script type="text/javascript">
	    window.onload=function() { alert("DATA INSERTION SUCCESSFUL");}
		</script>';
				
				header("Location:id.html");
    }
	
}

?>


