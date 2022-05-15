<?php
// servername => localhost
// username => root
// password => empty
// database name => users

$conn = mysqli_connect("localhost", "root", "", "aws_cpm");
          
// Check connection
if($conn === false){
	die("ERROR: Could not connect. " 
	    . mysqli_connect_error());
}

?>
