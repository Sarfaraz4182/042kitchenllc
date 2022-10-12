<?php
require_once('dbconnect.php');
session_start();

$name= $_POST["name"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$date= $_POST["date"];
$person= $_POST["person"];
$time= $_POST["time"];

$sql = "INSERT INTO reservation (name, email, phone, date, person, time)
VALUES ('$name', '$email', '$phone', '$date', '$person', '$time') ";

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



