<?php
if(isset($_POST['submit']))
{
	$First_Name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Email = $_POST['Email'];
	$Number = $_POST['Number'];
	$Account_Number = $_POST['Account_Number'];
	$Pin_code = $_POST['Pin_code'];
	$CNIC = $_POST['CNIC'];
	$Date = $_POST['Date'];
	$Departure = $_POST['Departure'];
	$Arrival = $_POST['Arrival'];
	$Gender = $_POST['Gender'];

	// Database connection
	$conn = new mysqli('localhost','root','','muneeb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into booking(First_Name, Last_Name, Email, Number, Account_Number, Pin_code, CNIC, Date, Departure, Arrival, Gender) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssss", $First_Name, $Last_Name, $Email, $Number, $Account_Number, $Pin_code, $CNIC, $Date, $Departure, $Arrival, $Gender);
		$execval = $stmt->execute();
		

		$stmt->close();
		$conn->close();
	}
}
?>