<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "db_admin2";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
  die("connection Failed:" .$conn->connect_error);
}
