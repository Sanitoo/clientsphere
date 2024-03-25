<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-EDGE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MESSAGES</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="messama.css">
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

		<a href="messata.php" class="active">
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
	<h1>Messages</h1>
<div class="wrapper">

	<section class="userss">
		<header>
			<div class="content">
				<img src="singh.jpg" alt="">
				<div class="details">
					<span>Singh Kumar</span>
					<p>Active now</p>
				</div>
			</div>
		</header>
		<div class="search">
			<span class="text">Select</span>
			<input type="text" placeholder="Enter to search...">
			<button><i class="fas fa-search"></i></button>
		</div>
		<div class="userss-list">
			<a href="">
				<div class="content">
					<img src="kira.jpg" alt="">
					<div class="details">
					<span>Kira Lone</span>
					<p>Mister Malik is inquiring the task he handed you last week.</p>
				</div>
				</div>
				<div class="status-dot"><i class="fas fa-circle"></i></div>
			</a>
			<a href="">
				<div class="content">
					<img src="joshua.jpg" alt="">
					<div class="details">
					<span>Joshua Rakitch</span>
					<p>Don't Forget the redis deal I asked for.</p>
				</div>
				</div>
				<div class="status-dot"><i class="fas fa-circle"></i></div>
			</a>
			<a href="">
				<div class="content">
					<img src="mia.jpg" alt="">
					<div class="details">
					<span>Mia Ferrera</span>
					<p>Was your request approved?</p>
				</div>
				</div>
				<div class="status-dot"><i class="fas fa-circle"></i></div>
			</a>
		</div>
		<a href=""><span class="primary"> Show More</span></a>
	</section>
</div>
</div>
</main>
</body>
</html>