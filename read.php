<?php
include("db.php");

$result = $conn->query("SELECT * FROM users");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li class='list-group-item'>" . $row["Nama"] . " - " . $row["Email"] . "</li>";
    }
} else {
    echo "<li class='list-group-item'>No data found</li>";
}

$conn->close();
?>
