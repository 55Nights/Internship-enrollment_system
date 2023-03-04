<?php
session_start();
if(!isset($_SESSION['user_id'])) {
  header("Location: signup.php");
  exit();
}

$user = $_SESSION['user_id'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="student.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <title>STUDENT | update your profile</title>
</head>

<body class="profile-body">
    <p class="logo">InternQuest</p>
</section>
<h1><?php echo $user?></h1>
    <div class="container">
        <section class="sidemenu">
            <!--<section class="profile-name">
                <div class="dp"></div>
                <p class="student-name tp">Henry Ngata</p>
            </section>
        -->
            <section class="menu">
                
                <section class="icon">
                    <img src="./assets/students/home.png" alt="">
                    <a href="./home.php" class="nav">Home</a>
                </section>
                <section class="icon">
                    <img src="./assets/students/Job.png" alt="">
                    <a href="./job.php" class="nav">job</a>
                </section>
                <section class="icon">
                    <img src="./assets/students/messages.png" alt="">
                    <a href="./messages.php" class="nav">Messages</a>
                </section>
                <section class="icon">
                    <img src="./assets/students/community.png" alt="">
                    <a href="./community.php" class="nav">community</a>
                </section>
                <!--
                <section class="icon">
                    <img src="./assets/students/Mentor.png" alt="">
                    <a href="./home.html" class="nav">Mentors</a>
                </section>
-->
                <section class="icon">
                    <img src="./assets/students/post.png" alt="">
                    <a href="./new-post.php" class="nav">New post</a>
                </section>
                </section>
        </section>
    </div>