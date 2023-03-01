<?php
require("./db.php");
$email = $_POST["email"];
$password = $_POST["password"];
$errors = [];
$data = [];

function checkEmailAndPassword() {
  if(isset($_POST['email']) && isset($_POST['password'])) {
    // email and password are set
    return true;
  } else {
    // email and/or password are not set
    return false;
  }
}
$bool =  checkEmailAndPassword();

if ($bool == true)
{
  $stmt = $conn->prepare("SELECT * FROM students WHERE email = ?");

    // Bind email parameter to the statement
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();

    // Get the result of the statement
    $result = $stmt->get_result();

    // Check if the email exists in the database
    if ($result->num_rows > 0) {
      echo "success";
      // Email exists in the database, do whatever you need to do here
      // For example, you could check if the password is correct by comparing it to the hashed password in the database
      // If the password is correct, you could log the user in and redirect them to a dashboard page
      // If the password is incorrect, you could display an error message to the user
    } else {
      // Email does not exist in the database, display an error message to the user
      echo "Fail";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
else {
  // Email or password is not set, display an error message to the user
  echo "Email or password is missing";
}


$_SESSION['username'] = 'jon';
