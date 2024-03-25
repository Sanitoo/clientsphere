<?php
session_start(); // Start session
include "connectdatabase.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs to prevent SQL injection
    $task_name = mysqli_real_escape_string($connect, $_POST['task_name']);
    $due_date = mysqli_real_escape_string($connect, $_POST['due_date']);
    $user_id = mysqli_real_escape_string($connect, $_POST['user_id']); // No need to retrieve from URL
    
    // Insert the task into the database along with the user ID
    $sql = "INSERT INTO tasks (task_name, due_date, user_id) VALUES ('$task_name', '$due_date', '$user_id')";
    $result = mysqli_query($connect, $sql);
    
    if ($result) {
        // Task successfully assigned, redirect to a success page or back to the staff page
        header("location: staffe.php");
        exit; // Stop further execution
    } else {
        // Error occurred, handle it accordingly
        echo "Error: " . mysqli_error($connect);
    }
}
?>
