<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:userhome.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:adminhome.php");
	}

	else
	{
		echo "username or password incorrect";
	}

}




?>









<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
	<img src="sreclogo231121084746.jpg" alt="srec logo" height=150px>
	<h1>Login Form</h1>
	<br><br><br><br>
	<div style="width: 500px; border-radius: 8px; box-shadow:#000;background-color:#F1F3F4">
		<br><br>


		<form action="#" method="POST">

	<div>
		<label>Username</label>
		<input type="text" name="username" required>
	</div>
	<br><br>

	<div>
		<label>Password</label>
		<input type="password" name="password" required>
	</div>
	<br><br>

	<div>		
		<input type="submit" value="Login" style="background-color:#60C7C1;border:none;border-radius:6px;color:white;width:5rem;height:2rem">
	</div>


	</form>


	<br><br>
 </div>
</center>

</body>
</html>
