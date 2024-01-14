<?php
require_once 'db_connection.php';

$sql = "SELECT * FROM registration_table";
$result = $conn1->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Registered Users</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Email</th><th>Course Code</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['course_code']}</td></tr>";
    }

    echo "</table>";
} else {
    echo "No registered users.";
}

$conn1->close();
?>
