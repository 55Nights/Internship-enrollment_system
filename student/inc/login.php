<?php
require("./db.php");
session_start();

// check if email and password are set and not empty
if (!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['password']) || empty($_POST['password'])) {
  // if either field is missing, return an error message
  $response = array('status' => 'error', 'message' => 'Email and password are required');
  echo json_encode($response);
  exit;
}

// retrieve the form data
$email = $_POST['email'];
$password = $_POST['password'];

// validate the email address
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // if the email address is invalid, return an error message
  $response = array('status' => 'error', 'message' => 'Invalid email address');
  echo json_encode($response);
  exit;
}

// validate the password (example: must be at least 8 characters long)
if (strlen($password) < 4 ) {
  // if the password is invalid, return an error message
  $response = array('status' => 'error', 'message' => 'Password should be 8 characters long');
  echo json_encode($response);
  exit;
}

// if the data is valid, perform the login process
// ...

// return a success message
//$response = array('status' => 'success', 'message' => 'Login for isset successful');
//echo json_encode($response);
//exit;
//
//$email = mysqli_real_escape_string($conn, $email);
//$password = mysqli_real_escape_string($conn, $password);

// query the database to check if the user exists
$sql = "SELECT s_id, password FROM students WHERE email = '$email'";
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

// retrieve the user's id and hashed password from the database
$row = mysqli_fetch_assoc($result);
$id = $row['s_id'];
$hashed_password = $row['password'];

// verify the password
if ($password != $hashed_password) {
  // if the password doesn't match, return an error message
  $response = array('status' => 'error', 'message' => 'Invalid password');
  echo json_encode($response);
  exit;
}
else {
  $response = array('status' => 'success', 'message' => 'Login for real successful');
echo json_encode($response);

}

// start the session and store the user's id
$_SESSION['user_id'] = $id;

// return a success message
header("Location: ../home.php");
exit();

?>
