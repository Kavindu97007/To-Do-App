
// Add Task function
function addTask() {
    const taskInput = document.getElementById('taskInput').value;
    const timePicker = document.getElementById('timePicker').value;

    if (taskInput === "" || timePicker === "") {
        alert("Please enter a task and select a date/time.");
        return;
    }

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../PHP/createTask.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                alert(xhr.responseText);
                if (xhr.responseText === "New record created successfully") {
                    document.getElementById('taskInput').value = "";
                    document.getElementById('timePicker').value = "";
                }
            } else {
                alert("Error: " + xhr.status);
            }
        }
    };

    xhr.send("todoItem=" + encodeURIComponent(taskInput) + "&todoDate=" + encodeURIComponent(timePicker));
}
