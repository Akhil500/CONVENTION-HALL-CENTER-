<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"database");
if(isset($_GET['edit']))
{
	$sql="select * from register where rid=".$_GET['edit'];
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
}
if(isset($_POST['btn_update']))
{
	$m=$_POST['name'];
	$a=$_POST['email'];
	$g=$_POST['password'];
	$c=$_POST['phone'];
	
	
	
	$update="UPDATE register SET name='$m',email='$a',password='$g',phone='$c' WHERE rid=".$_GET['edit'];
	$up=mysqli_query($con,$update);
	if(!isset($sql))
	{
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location:display.php");
	}
	
}
?>
<!doctype html>
<html>
<body>
  <style>
            body{background-color: #98FB98;
                 
            }
        </style>
<form method="post"><br><br><br>
<center><h1>EDIT OFFICERS</h1>
name:<input type="text"name="name" value="<?php echo $row['name']; ?>"><br><br>
email:<input type="text"name="email" value="<?php echo $row['emial']; ?>"><br><br>
password:<input type="text"name="pwd" value="<?php echo $row['passowrd']; ?>"><br><br>
phone:<input type="number"name="phone" value="<?php echo $row['phone']; ?>"><br><br>


<br><br>
<button type="submit" name="btn_update" id="btn_update" onClick="update()"><strong>Update</strong></button>
<a href="display.php"><button type="button" value="button">Cancel</button></a>
</form>
</body>
</html>

