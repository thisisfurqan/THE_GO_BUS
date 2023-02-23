<?php
if(isset($_POST['submit']))
{
	$First_Name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Email = $_POST['Email'];
	$Number = $_POST['Number'];
	$Message = $_POST['Message'];

	// Database connection
	$conn = new mysqli('localhost','root','','muneeb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(First_Name, Last_Name, Email, Number, Message) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $First_Name, $Last_Name, $Email, $Number, $Message);
		$execval = $stmt->execute();
		

		$stmt->close();
		$conn->close();
	}
}
?>