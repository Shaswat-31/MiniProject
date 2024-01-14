<?php
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $courseCode = $_POST["courseCode"];

    $sql = "INSERT INTO registration_table (name, email, password, course_code) VALUES ('$name', '$email', '$password', '$courseCode')";

    if ($conn1->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn1->error;
    }
}

$conn1->close();
?>
