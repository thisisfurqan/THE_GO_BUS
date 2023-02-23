<?php 

$conn = new mysqli('localhost','root','','furqan');

if(isset($_POST['UName']))
{
    
    $UName=$_POST['UName'];
    $Password=$_POST['Password'];
    
    $sql="select * from loginform where UName='".$UName."'AND Password='".$Password."' limit 1";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) 
    {
        header("location:AdminHome.php");
    }
    else
    {
    	echo '<script language="javascript">';
		echo 'alert("Incorrect Password")';
		echo '</script>';
    }
        
}

$conn->close();

?>