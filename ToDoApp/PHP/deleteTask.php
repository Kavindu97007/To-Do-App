<?php
include 'dbConnection.php';

// Check if taskId is set and not empty
if (isset($_GET['taskId']) && !empty($_GET['taskId'])) {
    $taskId = $_GET['taskId'];

    // SQL query to delete task with taskId
    $sql = "DELETE FROM tasks WHERE todoId = $taskId";

    if ($conn->query($sql) === TRUE) {
        // Task deleted successfully
        echo "Task deleted successfully.";
    } else {
        // Error deleting task
        echo "Error deleting task: " . $conn->error;
    }
} else {
    // taskId not provided or empty
    echo "Task ID not provided.";
}

$conn->close();
?>
