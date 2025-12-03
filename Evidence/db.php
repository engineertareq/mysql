<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "idb_bisew_evidence";

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>