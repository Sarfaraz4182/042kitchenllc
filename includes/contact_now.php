<?php
require_once('dbconnect.php');
session_start();

$name= $_POST["name"];
$email= $_POST["email"];
$subject= $_POST["subject"];
$message= $_POST["message"];

$sql = "INSERT INTO contact (name, email, subject, message)
VALUES ('$name', '$email', '$subject', '$message') ";

if ($conn->query($sql) === TRUE) {
    $response["message"] = "success";
    $response["alert"] = "Uploaded Successfully";
    $response["user"] = "admin";
}


else {
    $response["message"] = "failed";
    $response["alert"] = "Upload Failed";
}
echo json_encode($response);
?>



