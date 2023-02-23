<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="images/Bus.png" sizes="16x16">
  <title>THE GO BUS - Customer Feedback</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="Styling/Team.css">
  <link rel="stylesheet" href="Styling/NavBar.css">
  <link rel="stylesheet" href="Styling/load.css">
  <style>
  		.banner7
		{
		  	position: relative;
			width: 100%;
			height: 80vh;
			background: url(images/Rbg.jpg);
			background-size: cover;
			opacity: 0.5; 
		}
		#customers 
		{
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
		#customers td, #customers th 
		{
			border: 1px solid #ddd;
			text-align: center;
			padding: 8px;
		}
		#customers tr:nth-child(even)
		{
			background-color: #f2f2f2;
		}
		#customers tr:hover 
		{
			background-color: #ddd;
		}
		#customers th 
		{
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: center;
			background-color: black;
			color: white;
		}
	</style>
</head>
<body onload="Load()" style="margin:0;">
	<div  id="loader"></div>    
    <div style="display:none;" id="loadDiv" class="animate-bottom"> 
        <header>
          <a href="AdminHome.php" style="font-size: 40px;" class="logo"> THE <span>GO</span> BUS</a>
          <ul>
            <li><a href="AdminHome.php">Home</a></li>
            <li><a href="AdminSchedule.html">Schedule</a></li>
            <li><a href="AdminFares.html">Fares</a></li> 
            <li><a href="Datadisplay.php">Register Customers</a></li>
            <li><a class="active" href="DisplayContactUs.php">Customer Feedback</a></li>                   	
    		<li><button style="margin-right: -25px"><a href="Home.php">LOG OUT</a></button><li>
          </ul>
        </header>
        <div style="background-color: black">
          <section class="banner7"></section>
            <script type="text/javascript">
             window.addEventListener("scroll",function()
             {
               var header = document.querySelector("header");
               header.classList.toggle("sticky", window.scrollY>0)
             });
            </script>
        </div>
        <h1 style="margin-top: 0px;margin-left: 35% ; font-size: 55px; color: black">
              Customer <span>Feedback</span></h1>
	<table id="customers">
		<tr>
			<th>Id</th>
			<th>First_Name</th>
			<th>Last_Name</th>
			<th>Email</th>
			<th>Number</th>
			<th>Message</th>
		</tr>
<?php
	$conn = new mysqli('localhost','root','','muneeb');
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT id, First_Name, Last_Name, Email, Number, Message FROM contact";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr>
				<td>" 
					. $row["id"]. 
				"</td>
				<td>" 
					. $row["First_Name"] . 
				"</td>
				<td>" 
					. $row["Last_Name"] . 
				"</td>
				<td>"	
					. $row["Email"] . 
				"</td>
				<td>"
					. $row["Number"] . 
				"</td>
				<td>"
					. $row["Message"] . 
				"</td>
			</tr>" ;
	}
	echo "</table>";
	} else { echo "0 results"; }
$conn->close();
?>
</table>
<script>
      var myVar;
      function Load() 
      {
        myVar = setTimeout(showPage, 1000);
      }
      function showPage() 
      {
        document.getElementById("loader").style.display = "none";
        document.getElementById("loadDiv").style.display = "block";
      }
    </script>
    <br><br><br><br><br>
    <div class="footer">
          Copyright 2020, The Go Bus | Developed By MUNEEB AHMED, SAMI-UL-ISLAM & SAIFULLAH KHAN| All Rights Reserved
        </div>
        <script>
    var myVar;
    function Load() 
    {
      myVar = setTimeout(showPage, 1000);
    }
    function showPage() 
    {
      document.getElementById("loader").style.display = "none";
      document.getElementById("loadDiv").style.display = "block";
    }
  </script>
        <script>
	if ( window.history.replaceState ) {
	  window.history.replaceState( null, null, window.location.href );
	}
	</script>
</body>
</html>