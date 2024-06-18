// Assuming you have a button with id "myButton"
// const button = document.getElementById('button1');

// // Add a click event listener to the button
// button.addEventListener('click', function(event) {
//     event.preventDefault();
//     window.location.href = '../HTML/index.html';
// });

document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('button1');
    
    // Check if button is found before adding event listener
    if (button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = '../HTML/createTask.html';
        });
    } else {
        console.error("Button with id 'button1' not found.");
    }
});


