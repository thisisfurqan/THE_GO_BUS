<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="images/Bus.png" sizes="16x16">
    <title>THE GO BUS - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Styling/NavBar.css">
    <link rel="stylesheet" href="Styling/load.css">
    <link rel="stylesheet" href="Styling/Home.css">
    <link rel="stylesheet" href="Styling/login.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
</head>
<style>
    .centered 
{
    position: absolute;
    margin-top: -450px;
    margin-left: 17%;
 }   

</style>

<body onload="Load()" style="margin:0;">
    <div  id="loader"></div>
    <div style="display:none;" id="loadDiv" class="animate-bottom">
        <header>
            <a href="AdminHome.php" style="font-size: 40px;" class="logo"> THE <span>GO</span> BUS</a>
              <ul>
                <li><a class="active" href="AdminHome.php">Home</a></li>
                <li><a href="AdminSchedule.html">Schedule</a></li>
                <li><a href="AdminFares.html">Fares</a></li> 
                <li><a href="Datadisplay.php">Register Customers</a></li> 
                <li><a href="DisplayContactUs.php">Customer Feedback</a></li>                         
                <li><button style="margin-right: 150px"><a href="Home.html">LOG OUT</a></button><li>
              </ul>
        </header>
        <div id="home"></div>
        <div style="background-color: black;">
        	<section class="banner"></section>
        	<script type="text/javascript">
        		window.addEventListener("scroll",function()
        		{
					var header = document.querySelector("header");
					header.classList.toggle("sticky", window.scrollY>0)
				});
        	</script>
        	<div class="centered">
				<h1 style="opacity: 5; font-size: 60px; color: white">
				Lets <span>Travel</span> To <span>Your</span> Desired <span>Destination</span>
				</h1> 
				<br>
        		<a href="#videostory" id="videolink" style="border-bottom: none; margin-left: 20%">
        		  <img class="zoom" style=" border-bottom: none; margin-left: 165px; height: 100px" src="images/button.png"> <i class="fa fa-play-circle" aria-hidden="true">&nbsp;</i>
        		</a>
        		<div id="videostory" class="mfp-hide" style="max-width: 75%; margin-left: 300px;margin-right: 300px">
        			<iframe width="853" height="480" src="https://www.youtube.com/embed/NuWS4XGb-G4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        		</div>
        	</div>
        	<script>
        		$('#videolink').magnificPopup({
        		type:'inline',
        		midClick:true})
        	</script>
        </div>
        <div style="background-color: #EEEEEE">
            <div id="Book"></div>
            <br><br><br>
            <div class="Hmargin">
                <h1 style="margin-top: 0px;margin-left: 35% ; font-size: 55px; color: black">
                    Booking
                </h1>
                <div class="container">
                    <section class="row">
                        <div class="column">
                            <form action="Home.php" method="post" onsubmit="sub()">
                                <table>
                                    <tr>
                                        <th><label for="fname">FIRST NAME</label></th>
                                        <th><label for="lname">LAST NAME</label></th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" id="fname" name="First_Name" autocomplete="off" required></td>
                                        <td><input type="text" id="lname" name="Last_Name" autocomplete="off" required></td>
                                    </tr>
                                    <tr>
                                        <th><label for="email">EMAIL </label></th>
                                        <th><label for="Num">MOBILE NUMBER </label></th>
                                    </tr>
                                    <tr>
                                        <td><input type="email" id="email" name="Email" autocomplete="off" placeholder="someone@example.com" required></td>
                                        <td><input type="number" id="Num" name="Number" oninput="if(value.length>11)value=value.slice(0,11)" autocomplete="off" placeholder="03*********" required></td>
                                    </tr>
                                    <tr>
                                        <th><label for="ACCNum">ATM NUMBER </label></th>
                                        <th><label for="code">PIN CODE </label></th>
                                    </tr>
                                    <tr>
                                        <td><input type="number" id="AccNum" name="Account_Number"oninput="if(value.length>14)value=value.slice(0,14)" autocomplete="off" placeholder="No spaces" required></td>
                                        <td><input type="password" id="code" name="Pin_code" placeholder="4 digit code" maxlength="4" required></td>
                                    </tr>
                                    <tr>
                                        <th><label for="CNIC">ENTER CNIC NUMBER </label></th>
                                        <th><label for="Date">DEPARTURE DATE:</label></th>
                                    </tr>
                                    <tr>
                                        <td><input type="number" id="CNIC" name="CNIC" oninput="if(value.length>13)value=value.slice(0,13)" autocomplete="off" placeholder="No dashes" required></td>
                                        <td><input type="date" id="Date" name="Date" placeholder="Select Date" required></td>
                                    </tr>
                                      <tr>
                                        <th><label for="Departure">LEAVING FROM:</label></th>
                                        <th><label for="Arrival">GOING TO: </label></th>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <select id="Departure" name="Departure">
                                                <option value="default">Select departure</option>
                                                <option value="Raw">RAWALPINDI</option>
                                                <option value="Lah">LAHORE</option>
                                                <option value="Mul">MULTAN</option>
                                                <option value="Fsd">FAISALABAD</option>
                                                <option value="Pesh">PESHAWAR</option>
                                                <option value="Kar">KARACHI</option>
                                                <option value="Isl">ISLAMABAD</option>
                                                <option value="Abt">ABBOTTABAD</option>
                                                <option value="Guj">GUJRANWALA</option>
                                                <option value="Que">QUETTA</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select id="Arrival" name="Arrival" >
                                                <option value="default">Select Arrival</option>
                                                <option value="Raw">RAWALPINDI </option>
                                                <option value="Lah">LAHORE</option>
                                                <option value="Mul">MULTAN</option>
                                                <option value="Fsd">FAISALABAD</option>
                                                <option value="Pesh">PESHAWAR</option>
                                                <option value="Kar">KARACHI</option>
                                                <option value="Isl">ISLAMABAD</option>
                                                <option value="Abt">ABBOTTABAD</option>
                                                <option value="Guj">GUJRANWALA</option>
                                                <option value="Que">QUETTA</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>SELECT GENDER</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" id="male" name="Gender" value="male" required>
                                            <label for="male">Male</label><br>
                                            <input type="radio" id="female" name="Gender" value="female" required>
                                            <label for="female">Female</label><br>
                                            <input type="radio" id="other" name="Gender" value="other" required>
                                            <label for="other">Other</label>
                                        </td>
                                        <td>
                                            <input type="Reset" value="Reset">
                                        </td>
                                        <td>
                                            <input type="submit" name="submit" style="margin-left: -200px" value="Submit">
                                            <?php
                                                include "BookConnect.php";
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <script>
                                function sub() 
                                {
                                  alert("The form was submitted");
                                }
                            </script>
                        </div>
                        <div class="column">
                            <img style="width: 320px; margin:20px; margin-top: -20px;" src="images/Busonline.jpg" alt="BUS">
                        </div>
                    </section> 
                </div> 
            </div>
                    <br><br><br>
        </div>
        <div class="footer">
              Copyright 2020, The Go Bus | Developed By MUNEEB AHMED, SAMI-UL-ISLAM & SAIFULLAH KHAN| All Rights Reserved
        </div>
        
    </div>
    <script>
        var myVar;
        function Load() 
        {
          myVar = setTimeout(showPage, 1500);
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