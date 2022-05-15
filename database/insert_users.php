<!DOCTYPE html>
<html>
  
<head>
    <title>Insert User to Database</title>
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
          
        $name =  $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $email =  $_REQUEST['email'];
          
        $sql = "INSERT INTO users (name, phone, email) VALUES ('$name','$phone','$email')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>User have been successfully added to database." 
                . " Check database</h3>"; 
  
            echo nl2br("\n$name\n $phone\n $email");
          
        } else{
            echo "ERROR: There is an error $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
      
        <div id="center_button"><button onclick="location.href='add_customer.php'">Add Another User</button></div>
        <div id="center_button"><button onclick="location.href='display_users.php'">Show All Users</button></div>

    </center>
</body>
  
</html>