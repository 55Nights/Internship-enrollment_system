<?php
require("./db.php");
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: signup.php");
    exit();
}

if (isset($_POST['postheading']) && !empty($_POST['postheading'])) {
    $header = filter_var($_POST['postheading'], FILTER_SANITIZE_STRING);
    if ($_POST['postheading'] !== $header) {
        // handle the case where the last name contained illegal characters
        echo $errors[] = 'Invalid heading';
        exit; // stop the script
    }
    if (!preg_match ("/^[a-zA-z]*$/", $header) ) {  
       echo $errors[] = "Only alphabets and whitespace are allowed in the head.";
        exit;
    }
    $header = strtoupper($header);
} else {
    
   echo $errors[] = "Heading is required";
   exit;
}

if (isset($_POST['postbody']) && !empty($_POST['postbody'])) {
    $body = filter_var($_POST['postbody'], FILTER_SANITIZE_STRING);
    if ($_POST['postbody'] !== $body) {
        // handle the case where the last name contained illegal characters
        echo $errors[] = 'Invalid body';
        exit; // stop the script
    }
    if (!preg_match("/^[a-zA-Z0-9\s\.,!\?]+$/", $_POST['postbody'])) {
        echo $errors = "Invalid Text in Body";
        exit;
    }
} else {
    
   echo $errors[] = "Body is required";
   exit;
}

