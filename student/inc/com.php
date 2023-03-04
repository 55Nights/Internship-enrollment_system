<?php
require("./db.php");
$responses = array();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization');

$sql = "SELECT * FROM `posts`;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // `post_id`, `heading`, `body`, `date_created`, `student_email
    $response = array('id' => $row['post_id'], 'heading' => $row['heading'], 'body' => $row['body'], 'email' => $row['student_email'], 'date' => $row['date_created']);
    array_push($responses, $response);
  }
  echo json_encode($responses);
} else {
  echo "0 results";
}