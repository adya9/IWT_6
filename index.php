<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width-device-width , initial-scale=1.0" />
    <title>DEPARTMENT</title>
    <link rel="stylesheet" href="index.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
</head>

<body>
    <div class="whole">
        <div class="header">
            <img src="" class="header_img" />
            <div class="header_button">
                <a href="#about"><button>ABOUT US</button></a>
                <a href="#contact"><button>CONTACT</button></a>
                <a href="logout.php"><button>LOGOUT </button></a>

            </div>
        </div>
        <div class="body_content">
            <div >
                <img src="department.png" class="body_img" />
            </div>
            <div class="text">
                <label>WELCOME </label>
                <label><?php echo $_SESSION['id'] ?> </label><br>
                <label>CS DEPt. </label>
            </div>
            
        </div>
        <hr color="rgb(32, 103, 103)" >

        <div class="about" id="about">
            <label class="label1">ABOUT US</label>
            <label class="about_des">The Department aims at imparting quality education in Computer Science & Engineering and Information Technology through various post-graduate programmes. It also offers an atmosphere conducive for research scholars for pursuing research in various advanced areas of Computer Science, Engineering and Information Technology. The Computer Science students’ association, PIXEL, provides opportunities to sharpen the skills of students by organizing lectures and students meet. The alumni of the department deliver lectures on latest topics periodically for updating the skill sets of the students.</label>
        </div>
        <hr color="rgb(32, 103, 103)" >
        <div class="contact" id="contact">
            <label class="label2">TEACHERS</label>
            <label class="contact_email">HOD - Dr. S. K. V. Jayakumar <img class="prof_pic" src="skvj.png" width="100" height="120"/></label>
            <label class="contact_email">PROF - Dr. R. Subramanian <img class="prof_pic" src="subra.png" width="100" height="120"/></label>   
            <label class="contact_email">PROF - Dr. T. Chithralekha <img class="prof_pic" src="chitra.png" width="100" height="120"/></label>   
            <label class="contact_email">PROF - Dr. R. Sunitha <img class="prof_pic" src="sunitha.png" width="100" height="120"/></label>   
            <label class="contact_email">PROF - Dr. K. S. Kuppusamy <img class="prof_pic" src="kuppu.png" width="100" height="120"/></label>  
            <label class="contact_email">PROF - Dr. Krishnapriya  <img class="prof_pic" src="krishnapriya.png" width="100" height="120"/></label>   
            <label class="contact_email">PROF - Dr. S. L. Jayalakshmi  <img class="prof_pic" src="jayalaxmi.png" width="100" height="120"/></label>   
            <label class="contact_email">PROF - Dr. T. Sivakumar  <img class="prof_pic" src="sivakumar.png" width="100" height="120"/></label>   
            <label class="contact_email">PROF - Dr. T. Vengattaraman  <img class="prof_pic" src="venkatraman.png" width="100" height="120"/></label>   

                 
        </div>

        <hr color="rgb(32, 103, 103)" >

        <div class="contact" id="contact">
            <label class="label2">CONTACT</label>
            <label class="contact_email">EMAIL - xyz@gmail.com</label>   
                 
        </div>
        
        

        <div class="footer">
            created by @adya <i class="fi fi-rr-heart"></i> Thanks for Visiting.
        </div>
    </div>
    

</body>

</html>