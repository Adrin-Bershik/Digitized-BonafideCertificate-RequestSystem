<?php
	$firstName = $_POST['firstName'];
	$purpose = $_POST['purpose'];
	$email = $_POST['email'];
	$number = $_POST['number'];


	// Database connection
	$conn = new mysqli('localhost','root','','bonafied');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into bonafied_final(name,email,phone,purpose) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $firstName,$email, $number,$purpose);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>