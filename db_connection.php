<?php
$host = "localhost";
$username = "root";
$password = "";
$db1_name = "registration_database";
$db2_name = "query_database";

// Connect to the registration database
$conn1 = new mysqli($host, $username, $password, $db1_name);

// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}

// Connect to the query database
$conn2 = new mysqli($host, $username, $password, $db2_name);

// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
?>
