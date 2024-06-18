<?php
include 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $todoItem = $_POST['todoItem'];
    $todoDate = $_POST['todoDate'];

    $sql = "INSERT INTO tasks (todoDate, todoItem) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $todoDate, $todoItem);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request method";
}

$conn->close();
?>

