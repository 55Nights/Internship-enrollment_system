<?php
session_start();
$email = $_SESSION['email'];

require("./db.php");
$rec = array();
$sql = "SELECT DISTINCT receiver_id FROM messages WHERE sender_id = 'test10@students.uni';";

    $result = mysqli_query($conn, $sql);
  
    while($row = mysqli_fetch_assoc($result)) {
        $rep = $row['receiver_id'];
        array_push($rec, $rep);
    }
    echo json_encode($rec);