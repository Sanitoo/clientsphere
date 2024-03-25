<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type="text/css">
    	body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%);

        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .container h1 {
            text-align: center;
        }

        form {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="date"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: none;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: black;
        }

        .wrapper {
            margin-bottom: 20px;
        }
    </style>
    <title>Home</title>
        
</head>
<body>
    <h1>Tasks</h1>
<div class="container">

    <div class="wrapper">
        <form method="post" action="addtasks.php">
            <h2>Add Task</h2>
            <label for="task_name">Task Name:</label>
            <input type="text" name="task_name" id="task_name" required>
            <label for="due_date">Due Date:</label>
            <input type="date" name="due_date" id="due_date" required>
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
            <input type="submit" name="add" value="Add Task">
        </form>
    </div>

<?php
session_start(); // Start session
include "connectdatabase.php";

// Check if the user ID is provided
if(isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
    // You can proceed to display a form for task assignment or perform any other task assignment logic here
} else {
    // Redirect or display an error message if user ID is not provided
    echo "Error: User ID not provided.";
    exit; // Stop further execution
}
?>

 
</div>

</body>
</html>
