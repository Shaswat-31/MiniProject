<?php
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userQuery = $_POST["userQuery"];

    $sql = "INSERT INTO query_table (user_name, user_email, user_query) VALUES ('$userName', '$userEmail', '$userQuery')";

    if ($conn2->query($sql) === TRUE) {
        echo "Query submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn2->error;
    }
}

$conn2->close();
?>
