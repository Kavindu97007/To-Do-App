// Fetch Tasks by Date
function fetchTasksByDate(date) {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "../PHP/displayTasks.php?date=" + encodeURIComponent(date), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('taskList').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}




