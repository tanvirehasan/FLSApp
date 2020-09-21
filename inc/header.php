<?php

    include 'conn.php';
    include 'fun.php'; 


?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">    
</head>


<body>
    <div class="headermanu">
        <div class="manuicon"><i class="fas fa-bars"></i></div>
        <div class="logo"><img src="img/logo/flslogo.png"></div>        
    </div>

    <div class="manuscreen">
        <div class="profile">

           <?php 
                $orgall = new org;
                if (isset($_SESSION['user_name'])) {
                $user_name = $_SESSION['user_name'];

                $userdata = $orgall->fetch_data($user_name);
                    $yourname = $userdata['username'];
                    $yourid = $userdata['id'];
                    $_SESSION['orgname'] = $userdata['orgname'];

                 ?>           

            <div class="profilepic"><img src="img/<?php echo $userdata['profilepic'];?>"></div>
            <div class="name"><h2><?php echo $userdata['username'];?></h2><b><?php echo $userdata['jobtitle'];?></b></div> 
         

            <?php } ?>      

        </div>

        <div class="manulist">
            <table>
                <tr><td><i class="fas fa-home"></i></td><td><a href="index.php">Home</a></td></tr>
                <tr><td><i class="fas fa-paste"></i></td><td><a href="#">Resources</a></td></tr>
                <tr><td><i class="fas fa-gamepad"></i></td><td><a href="1t010.php">Games</a></td></tr>
                <tr><td><i class="fas fa-diagnoses"></i></td><td><a href="mcq.php">Exam</a></td></tr>
                <tr><td><i class="fas fa-video"></i></td><td><a href="#">Video</a></td></tr>
                <tr><td><i class="fas fa-camera"></i></td><td><a href="#">Photos</a></td></tr>
                <tr><td><i class="fas fa-sign-out-alt"></i></td><td><a href="logout.php">Log Out</a></td></tr>
            </table>
        </div>      



    </div>