<?php
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "kitchenllc";

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname) or die('unable to connect to db');


define("SITEURL", "http://138.68.78.206");
define("SITETITLE", "AnimeKia | Dashboard");
define('BASE_URL', 'http://localhost/animekia');
$domain = 'http://www.animekia.com';

//date_default_timezone_set("Asia/Karachi");
date_default_timezone_set('America/Los_Angeles');
