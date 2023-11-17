<?php
$insert = false;
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
$con = mysqli_connect($server, $username, $password);

// Check for connection success
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

if(isset($_POST['fname'])){

    // Collect post variables
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname= $_POST['lname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
       
    $sql = "INSERT INTO `iwt_user`.`user5` (`id`,`fname`,`lname`, `age`, `gender`, `email`,`pass`, `phone`) VALUES ('$id','$fname','$lname', '$age', '$gender', '$email','$pass','$phone');";
   
    // Execute the query
    if($con->query($sql) == true){
        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}

?>

<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width-device-width , initial-scale=1.0" />
    <title>REGISTER</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>

    <div class="whole">
        <div>
            <label class="label1">REGISTER</label>
            <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        echo "<a class='btn' href='LOGIN.php'><button>LOGIN</button></a>";
        }
    

    ?>
            <form action="register.php" method="post">
                <input type="text" name="id" id="id" placeholder="Enter your Register No." required>
                <input type="text" name="fname" id="fname" placeholder="Enter your First Name" required>
                <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" required>
                <input type="text" name="age" id="age" placeholder="Enter your Age" required>
                <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                <input type="password" name="pass" id="pass" placeholder="Enter Password" required>
                <input type="phone" name="phone" id="phone" placeholder="Enter your phone" required>
             
                <button class="btn">Submit</button> 
               
            </form>
        </div>
        <div>
            <img src="department.png" class="body_img"/>
        </div>
    </div>
    


</body>

</html>