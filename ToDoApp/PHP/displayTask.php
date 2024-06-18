<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tasks</title>
    
    <link rel="stylesheet" href="../CSS/createTask.css"> <!--to navbar -->
    <link rel="stylesheet" href="../CSS/displayTask.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../JS/hamburger.js"></script>
    <script src="../JS/displayTask.js"></script>
    <script src="../JS/deleteTask.js"></script>
</head>
<body>

<div class="topnav" id="myTopnav">
    <a href="../HTML/home.html" >Home</a>
    <a href="../HTML/createTask.html" >Add Task</a>
    <a href="#news">Upcoming</a>
    <a href="#contact">Done</a>
    <a href="#" class="active">All Tasks</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

    <div class="container">
        <h1>All Tasks</h1>
        <ul id="allTasksList">
            <?php
            include 'dbConnection.php';

            $sql = "SELECT * FROM tasks";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $taskId = $row['todoId'];
                    $taskItem = $row['todoItem'];
                    $taskDate = $row['todoDate'];

                    echo "<li>";
                    //echo "<strong>Task ID:</strong> $taskId<br>";
                    echo "<strong></strong> $taskItem<br>";
                    echo "<strong></strong> $taskDate<br>";
                    echo "<button onclick='editTask($taskId)'>Edit</button>";
                    echo "<button onclick='deleteTask($taskId)'>Delete</button>";
                    echo "</li>";
                }
            } else {
                echo "<li>No tasks found.</li>";
            }

            $conn->close();
            ?>
        </ul>
    </div>
</body>
</html>
