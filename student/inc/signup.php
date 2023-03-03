<?php
require("./db.php");
session_start();

// check if email and passwords are set and not empty
if (!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['password']) || empty($_POST['password']) || !isset($_POST['pwd']) || empty($_POST['pwd'])) {
  // if either field is missing, return an error message
  $response = array('status' => 'error', 'message' => 'Email and passwords are required');
  echo json_encode($response);
  exit;
}
// retrieve the form data
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_pwd = $_POST['pwd'];


$pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
if (!preg_match($pattern, $email)) {
   echo "Email entered is invalid";
   exit;
} 


// validate that the passwords match
if ($password !== $confirm_pwd) {
  // if the passwords don't match, return an error message
  $response = array('status' => 'error', 'message' => 'Passwords do not match');
  echo json_encode($response);
  exit;
}


//check if the user exists
// prepare the SQL statement to check if the email exists
$sql = "SELECT * FROM students WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
if (!$stmt) {
  // if the statement preparation fails, return an error message
  $response = array('status' => 'error', 'message' => 'Failed to prepare the SQL statement');
  echo json_encode($response);
  exit;
}

// bind the parameters to the statement
mysqli_stmt_bind_param($stmt, 's', $email);

// execute the statement
mysqli_stmt_execute($stmt);

// store the result in a variable
mysqli_stmt_store_result($stmt);

// check if the email already exists
if (mysqli_stmt_num_rows($stmt) > 0) {
  // if it exists, return an error message
  $response = array('status' => 'error', 'message' => 'Email already exists');
  echo json_encode($response);
  exit;

  mysqli_stmt_close($stmt);
}



// hash the password
//$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// connect to the database
// prepare the SQL statement
$sql = "INSERT INTO students (email, password) VALUES (?, ?)";
$sql2 = "INSERT INTO socials (s_id)";
$stmt = mysqli_prepare($conn, $sql);
if (!$stmt) {
  // if the statement preparation fails, return an error message
  $response = array('status' => 'error', 'message' => 'Failed to prepare the SQL statement');
  echo json_encode($response);
  exit;
}

// bind the parameters to the statement
mysqli_stmt_bind_param($stmt, 'ss', $email, $password);

// execute the statement
if (mysqli_stmt_execute($stmt)) {
  // if the statement execution is successful, return a success message
  $response = array('status' => 'success', 'message' => 'Sign up successful');
  echo json_encode($response);
} else {
  // if the statement execution fails, return an error message
  $response = array('status' => 'error', 'message' => 'Failed to insert the record into the database');
  echo json_encode($response);
}

// close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
$_SESSION['email'] = $email;
echo $_SESSION['email'];
header("Location: ../profile.php");
  exit();