<?php
session_start();
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $server = "localhost";
    $username = "root";
    $password = "";

// Create a database connection
    $con = mysqli_connect($server, $username, $password);

// Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    } 
    $id=$_POST["id"];
    $pass=$_POST["pass"];
    
    
    $sql="SELECT * FROM `iwt_user`.`user5` WHERE id='$id' AND pass='$pass'";
    $result=mysqli_query($con,$sql);
    $num= mysqli_num_rows($result);
    if($num==1){
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['id']=$id;
        header ("location: index.php");

    }
    else{
        $showError=true;
    }
}

?>


<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width-device-width , initial-scale=1.0" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <?php
        if($login == true){
        echo "<p class='submitMsg'>Successfully Loggedin.</p>";
       
        }
        if($showError==true)
        {
            echo "<p>Invalid Register No. Or Password.</p>";
        }
    

    ?>
    <div class="whole">
        <div>
            <label class="label1">LOGIN</label>
            <form action="login.php" method="post">
                <input type="text" name="id" id="id" placeholder="Enter your Register No." required>
              
                <input type="password" name="pass" id="pass" placeholder="Enter Password" required>
             
                <button class="btn">Submit</button> 
               
            </form>
            <label class="label_reg">Not having an Account ? <a href="register.php">Register</a></label>
        </div>
        <div>
            <img src="department.png" class="body_img"/>
        </div>
    </div>
    


</body>

</html>