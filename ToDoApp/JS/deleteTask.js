function deleteTask(taskId) {
    if (confirm("Are you sure you want to delete this task?")) {
        // Create an AJAX request to delete the task
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Reload the page or update the task list after successful deletion
                location.reload();
            }
        };
        xhttp.open("GET", "deleteTask.php?taskId=" + taskId, true);
        xhttp.send();
    }
}
