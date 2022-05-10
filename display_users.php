<!DOCTYPE html>
<html>
<body>

<center><h1>All Users Recorded in Database</h1></center>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aws_cpm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, phone, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . " - Phone: ". $row["phone"]. " " . " - Email: ". $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<center><h1>Edit Existing User</h1></center>

<form action="update_users.php" method="post">
<p>
	<label for="ID">User ID:</label>
	<input type="text" name="id" id="id">
</p>

<p>
	<label for="Name">Full Name:</label>
	<input type="text" name="name" id="name">
</p>

<p>
	<label for="Phone">Phone:</label>
	<input type="text" name="phone" id="phone">
</p>
                   
<p>
	<label for="email">Email Address:</label>
	<input type="text" name="email" id="email">
</p>
          
<input type="submit" value="Update">
      
</form>

</body>
</html>