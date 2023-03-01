<?php
require("./db.php");
$email = $_POST["email"];
$password = $_POST["password"];
$stmt = $conn->prepare("INSERT INTO students (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $password);

// Execute the statement
if ($stmt->execute()) {
  echo "Record inserted successfully";
} else {
  echo "Error inserting record: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();


?>