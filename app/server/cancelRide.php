<?php

$user_id = $_POST['user'];
$request_id = $_POST['request'];
$driver_id = $_POST['driver'];

$server = "uber2.db";
$username = "aheritier";
$password = "?u--&a%2+@F=2";
$db = "uber2";

// Create connection
$conn = new mysqli($server, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update driver to busy
$sql = "UPDATE requests SET status='pending', driver=0 WHERE user_id=$user_id AND req_id=$request_id AND driver=$driver_id";

if ($conn->query($sql) === TRUE) {
    echo "Record update success";
} else {
    echo $user_id;
    echo $request_id;
    echo "Error updating record: " . $conn->error;
}

mysql_close($conn);

?>