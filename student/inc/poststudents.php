<?php
require("./db.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$location = $_POST['location'];
$password = $_POST['password'];
$otherroles = $_POST['otherroles'];
$experience = $_POST['experience'];
$industry = $_POST['industry'];
$skills = $_POST['skills'];
$primaryrole = $_POST['primaryrole'];
$bio = $_POST['bio'];
$achievement = $_POST['achievement'];
$profilepic = $_FILES['profilepic']['name'];
$resume = $_FILES['resume']['name'];

// Save uploaded files
move_uploaded_file($_FILES['profilepic']['tmp_name'], 'uploads/'.$profilepic);
move_uploaded_file($_FILES['resume']['tmp_name'], 'uploads/'.$resume);
