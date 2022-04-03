<?php

    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$Email = $_POST['email'];
	$password = $_POST['password'];
	$Confirmpassword = $_POST['password'];

//Database connect
$conn = new mysqli('localhost','root','Om3gAmUnChi3','midtermprojectwad2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstName, lastName, email, password )
    values( ?, ? , ? , ?) ");
    $stmt->bind_param("ssss", $firstName, $lastName, $Email, $password);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration Successfully..";
    $stmt->close();
    $conn->close();
}




?>