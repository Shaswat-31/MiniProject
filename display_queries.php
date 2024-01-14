<?php
require_once 'db_connection.php';

$sql = "SELECT * FROM query_table";
$result = $conn2->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>User Queries</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Email</th><th>Query</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['user_name']}</td><td>{$row['user_email']}</td><td>{$row['user_query']}</td></tr>";
    }

    echo "</table>";
} else {
    echo "No queries submitted.";
}

$conn2->close();
?>
