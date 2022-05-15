<!DOCTYPE html>
<html>
  
<head>
    <title>Edit User in Database</title>
</head>
  
<body>
    <center>
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
        
        $user_id =  $_REQUEST['id'];
        $name =  $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $email =  $_REQUEST['email'];
          
        $sql = "UPDATE users SET name='$name', phone='$phone', email='$email' WHERE id='$user_id'";

          
        if(mysqli_query($conn, $sql)){
            echo "<h3>User have been successfully added to database." 
                . " Check database</h3>"; 
  
            echo nl2br("\n$user_id\n$name\n $phone\n $email");
          
        } else{
            echo "ERROR: Error occurred when updating the database $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>

        <div id="center_button"><button onclick="location.href='display_users.php'">Show All Users</button></div>

    </center>
</body>
  
</html>