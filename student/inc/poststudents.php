<?php
require("./db.php");
session_start();
header("Access-Control-Allow-Origin: *");
$errors = [];
$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$location = trim($_POST['location']);
$email = $_POST['email'];
$otherroles = trim($_POST['otherroles']);
$experience = trim($_POST['experience']);
$primaryrole = trim($_POST["job"]);
$industry = trim($_POST['industry']);
$skills = trim($_POST['skills']);
$achievement = trim($_POST['achievement']);
$bio = trim($_POST["bio"]);
$github = $_POST["github"];
$linkedin = $_POST["LinkedIn"];
$job = $_POST["job"];
$twitter = $_POST["twitter"];
$profilepic = $_FILES["profilepic"];
$website = $_POST["website"];
$resume = $_FILES["resume"];

//First Name
if (isset($_POST['firstname']) && !empty($_POST['firstname'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
    if ($_POST['firstname'] !== $firstname) {
        // handle the case where the last name contained illegal characters
        echo $errors[] = 'Invalid First Name';
        exit; // stop the script
    }
    if (!preg_match ("/^[a-zA-z]*$/", $firstname) ) {  
       echo $errors[] = "Only alphabets and whitespace are allowed.";
        exit;
    }
    $firstname = strtoupper($firstname);
} else {
    
   echo $errors[] = "First name is required";
   exit;
}

//Last Name
if (isset($_POST['lastname']) && !empty($_POST['lastname'])) {
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
    if ($_POST['lastname'] !== $lastname) {
        // handle the case where the last name contained illegal characters
        echo $errors[] = 'Invalid Last Name';
        exit; // stop the script
    }
    if (!preg_match('/^[A-Za-z]+$/', $lastname)) {
        // Lastname contains only alphabets
        echo $errors[] = "Only alphabets and whitespace are allowed.";
        exit;
    }
    $lastname = strtoupper($lastname);

} else {
    
    echo $errors[] = 'Last Name is required';
    exit;
}
//location

if (isset($_POST['location']) && !empty($_POST['location'])) {
    $location = filter_var($_POST['location'], FILTER_SANITIZE_STRING);
    if ($_POST['location'] !== $location) {
        // handle the case where the last name contained illegal characters
        echo $errors[] = 'Invalid Location Name';
        exit;
    }
    if (!preg_match('/^[A-Za-z]+(?:[,\s][A-Za-z]+)*$/', $location)) {
        // Location contains only alphabets and words are separated by comma and whitespace
        echo $errors[] = "Location contains only alphabets and words are separated by comma and whitespace";
        exit;
    }
} else {
    
    echo $errors[] = 'Location Name is needed';
    exit;
}

//Job
if (isset($_POST['job']) && !empty($_POST['job'])) {
    if ($_POST['job'] !== $job) {
        // handle the case where the last name contained illegal characters
        echo $errors[] = 'Invalid Job Name';
        exit;
    }
} else {
    
    echo $errors[] = 'Job is required';
    exit;
}

//otherroles
if (isset($_POST['otherroles']) && !empty($_POST['otherroles'])) {
    $skills_arr = preg_split('/[\s,]+/', $otherroles);
    foreach ($skills_arr as $otherroles) {
        if (!ctype_alpha($otherroles)) {
            echo $errors[] = "Invalid value in other roles field";
            exit;
            break;
        }
    }
    if (!preg_match('/^[a-zA-Z]+(?:\s*,\s*[a-zA-Z]+)*$/', $otherroles)) {
        echo $errors[] = "Invalid value other roles field";
        exit;
    }
} else {
    
    echo $errors[] = "Skills field is needed";
    exit;
}

//experience
if (isset($_POST['experience']) && !empty($_POST['experience'])) {
    if (!ctype_digit($experience) || $experience < 1) {
        echo $errors[] = "Invalid value in Experience field";
        exit;
    }
    if (preg_match('/^[1-9][0-9]{0,1}$|^10$/', $experience) !== 1) {
        // Value is not valid
        echo $errors[] = "Experience must be a positive whole number less than or equal to 10.";
        exit;
    }
} else {
    
    echo $errors[] = "Experience field is required";
    exit;
}

//industry
if (isset($_POST['industry']) && !empty($_POST['industry'])) {
    
} else {
    echo $errors[] = "Industry is required"; 
    exit;
}

// skills
if (isset($_POST['skills']) && !empty($_POST['skills'])) {
    $skills_arr = preg_split('/[\s,]+/', $skills);
    foreach ($skills_arr as $skill) {
        if (!ctype_alpha($skill)) {
            echo $errors[] = "Invalid value in Skills field";
            break;
        }
    }
    if (!preg_match('/^[a-zA-Z]+(?:\s*,\s*[a-zA-Z]+)*$/', $skills)) {
        echo $errors[] = "Invalid value in Skills field";
        exit;
    }
} else {
    echo $errors[] = "Skills are required"; 
    exit;    
}

//acheivement
if (isset($_POST['achievement']) && !empty($_POST['achievement'])) {
    $achievement = filter_var($_POST['achievement'], FILTER_SANITIZE_STRING);
    if (!preg_match("/^[a-zA-Z0-9\s\.,!\?]+$/", $achievement)) {
        echo $errors = "Invalid Text in achievement";
        exit;
    }
}

//bio
if (isset($_POST['bio']) && !empty($_POST['bio'])) {
    $bio = filter_var($_POST['bio'], FILTER_SANITIZE_STRING);
    if (!preg_match("/^[a-zA-Z0-9\s\.,!\?]+$/", $bio)) {
        echo $errors = "Invalid Text in bio";
        exit;
    }
}

//achievement
if (isset($_FILES['resume']) && !empty($_FILES['resume']['name'])) {
    $allowed_extensions = ['pdf', 'doc', 'docx'];
    $resume_extension = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));
    if (!in_array($resume_extension, $allowed_extensions)) {
        $errors[] = "Invalid file type for Resume. Only PDF, DOC and DOCX files are allowed";
        exit;
    }
    else {
        $filename = uniqid() . '-' . $_FILES['resume']['name'];
        // move file to permanent location
        $upload_dir = 'uploads/';
        $upload_path = $upload_dir . $filename;
        move_uploaded_file($_FILES['resume']['tmp_name'], $upload_path);
    }
} else {
    
    echo $errors[] = "Resume can not be empty";
    exit;
}

// profile pic
if (!empty($_FILES['profilepic']['name'])) {
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
    $profilepic_extension = strtolower(pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION));
    if (!in_array($profilepic_extension, $allowed_extensions)) {
        echo $errors[] = "Invalid file type for Profile pic. Only JPG, JPEG, PNG and GIF files are allowed";
        exit;
    }
    else {
        $filename = uniqid() . '-' . $_FILES['profilepic']['name'];
        // move file to permanent location
        $upload_dir = 'uploads/';
        $upload_path = $upload_dir . $filename;
        move_uploaded_file($_FILES['profilepic']['name'], $upload_path);
    }
}

//website
if(isset($_POST['website']) && !empty($_POST['website']))
{
    if (!filter_var($website, FILTER_VALIDATE_URL)) {
        // handle the case where the URL is invalid
        echo $errors[] = 'Invalid website';
        exit; // stop the script
      }
}

//github
if (isset($_POST['github']) && !empty($_POST['github']))
{
    if (!filter_var($github, FILTER_VALIDATE_URL)) {
        // handle the case where the URL is invalid
        echo $errors[] = "Invalid Github";
        exit; // stop the script
    }
}

//linked in
if(isset($_POST['LinkedIn']) && !empty($_POST['LinkedIn']))
{
    if (!filter_var($linkedin, FILTER_VALIDATE_URL)) {
        // handle the case where the URL is invalid
        echo $errors[] = "Invalid Linked In"-
        exit; // stop the script
      }

}

//twitter
if(isset($_POST['twitter']) && !empty($_POST['twitter']))
{
    if (!filter_var($twitter, FILTER_VALIDATE_URL)) {
        // handle the case where the URL is invalid
        echo $errors[] = "Invalid twitter URL"-
        exit; // stop the script
      }
}
  


// insert the records into the database




// GET the user_id primary key
echo $email;
$sql = "SELECT s_id FROM students WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
  // if the query fails, return an error message
  $response = array('status' => 'error', 'message' => 'Database query error');
  echo json_encode($response);
  exit;
}

if (mysqli_num_rows($result) == 0) {
  // if no matching user is found, return an error message
  $response = array('status' => 'error', 'message' => 'Invalid email address');
  echo json_encode($response);
  exit;
}
else {
    $row = mysqli_fetch_assoc($result);
    $id = $row['s_id'];
    echo $id;
    $_SESSION['user_id'] = $id;
    header("Location: ../home.php");
    exit();
    # code...
}

// retrieve the user's id and hashed password from the database


    
       
