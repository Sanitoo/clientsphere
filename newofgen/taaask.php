<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-EDGE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DASHBOARD</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="messama.css">
</head>
<body>
	 <style>
        /* Add your custom styles here */
       table {
	background: #fff;
	width: 100%;
	border-radius: 2rem;
	padding: 1.8rem;
	text-align: center;
	box-shadow: 0 2rem 3rem rgba(132, 139, 200, 0.18);
    transition: all 300ms ease;
}

       table:hover {
	box-shadow: none;
}

       table tbody td {
	height: 2.8rem;
	border-bottom: 1px solid rgba(132, 139, 200, 0.18);
}

    </style>
<div class="container">
    <aside>
        <div class="top">
            <div class="logo">
                <img src="scls.png" alt="ClientSphere Logo">
                <h2>Client<span class="danger">sphere</span></h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div>
        </div>

	<div class="sidebar">
		<a href="dashsta.php">
			<span class="material-icons-sharp">grid_view</span>
			<h3>Dashboard</h3>
		</a>

		<a href="client.php">
			<span class="material-icons-sharp">person_outline</span>
			<h3>Clients</h3>
		</a>

		<a href="ordersta.php">
			<span class="material-icons-sharp">receipt_long</span>
			<h3>Orders</h3>
		</a>

		<a href="analyseta.php">
			<span class="material-icons-sharp">query_stats</span>
			<h3>Analytics</h3>
		</a>

		<a href="messata.html">
			<span class="material-icons-sharp">mail_outline</span>
			<h3>Messages</h3>
			<span class="message-count">14</span>
		</a>

		<a href="taaask.php" class="active">
			<span class="material-icons-sharp">task</span>
			<h3>Tasks</h3>
		</a>

		<a href="#">
			<span class="material-icons-sharp">report_gmailerrorred</span>
			<h3>Report</h3>
		</a>

		<a href="#">
			<span class="material-icons-sharp">settings</span>
			<h3>Settings</h3>
		</a>

		<a href="logout.php">
			<span class="material-icons-sharp">logout</span>
			<h3>Log out</h3>
		</a>

	</div>
	</aside>
	<main>
		<h2>Tasks</h2>
		 <?php
    include 'connectdatabase.php';
    session_start(); // Start session

    // Fetch tasks associated with the logged-in user
    $user_id = $_SESSION['id'];
    $sql = "SELECT * FROM tasks WHERE user_id='$user_id'";
    $result = mysqli_query($connect, $sql);

    // Check if tasks exist
    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Task Name</th><th>Due Date</th></tr>";
        while($task = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $task['task_name'] . "</td>";
            echo "<td>" . $task['due_date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No tasks found.</p>";
    }
    ?>

	</main>
</div>
</body>
</html>