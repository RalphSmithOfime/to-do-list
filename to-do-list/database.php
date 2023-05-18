<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$database = 'to_do_list_db';
$conn = new mysqli($hostName, $userName, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>