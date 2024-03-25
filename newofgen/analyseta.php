<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-EDGE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ANALYTICS</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="analyse.css">
</head>
<body>

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
		<a href="dashsta.php" >
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

		<a href="analyseta.php"class="active">
			<span class="material-icons-sharp">query_stats</span>
			<h3>Analytics</h3>
		</a>

		<a href="messata.php">
			<span class="material-icons-sharp">mail_outline</span>
			<h3>Messages</h3>
			<span class="message-count">14</span>
		</a>

		<a href="taaask.php">
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
		<h1>Analystics</h1>
		<canvas id="chart"></canvas>

	</main>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="mainsta.js"></script>
</body>
</html>