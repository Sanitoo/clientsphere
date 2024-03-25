<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-EDGE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DASHBOARD</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dashma.css">
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
		<a href="dashma.php" class="active">
			<span class="material-icons-sharp">grid_view</span>
			<h3>Dashboard</h3>
		</a>

		<a href="staffe.php">
			<span class="material-icons-sharp">person_outline</span>
			<h3>Staffs</h3>
		</a>

		<a href="ordersma.php">
			<span class="material-icons-sharp">receipt_long</span>
			<h3>Orders</h3>
		</a>

		<a href="analysema.php">
			<span class="material-icons-sharp">query_stats</span>
			<h3>Analytics</h3>
		</a>

		<a href="messama.html">
			<span class="material-icons-sharp">mail_outline</span>
			<h3>Messages</h3>
			<span class="message-count">14</span>
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
		<h1>Dashboard</h1>
		<div class="insights">
			<div class="sales">
				<span class="material-icons-sharp">bar_chart</span>
			<div class="middle">
				<div class="left">
					<h3>Total Sales</h3>
					<h1>$13,063.34</h1>

				</div>
			<div class="progress">
				<svg>
					<circle cx='38' cy='38' r='36'></circle>
				</svg>
				<div class="number">
					<p>73%</p>
				</div>
			</div>
			</div>	
			<small class="text-muted">Last Month</small>
			</div>	
<!------------------------------ End of sales --------------------------------------------------->
            <div class="expenses">
				<span class="material-icons-sharp">credit_card</span>
			<div class="middle">
				<div class="left">
					<h3>Total Expenses</h3>
					<h1>$10,147.63</h1>

				</div>
			<div class="progress">
				<svg>
					<circle cx='38' cy='38' r='36'></circle>
				</svg>
				<div class="number">
					<p>52%</p>
				</div>
			</div>
			</div>	
			<small class="text-muted">Last Month</small>
			</div>	
		
<!----------------------------- End of expenses -------------------------------------->
            <div class="income">
				<span class="material-icons-sharp">monetization_on</span>
			<div class="middle">
				<div class="left">
					<h3>Total Income</h3>
					<h1>$8,598.22</h1>

				</div>
			<div class="progress">
				<svg>
					<circle cx='38' cy='38' r='36'></circle>
				</svg>
				<div class="number">
					<p>47%</p>
				</div>
			</div>
			</div>	
			<small class="text-muted">Last Month</small>
			</div>	
<!------------------------------- End of income ------------------------------------------------------->			
			</div>


        <div class="recent-orders">
        	<h2>Recent Orders</h2>
        	<table>
        		<thead>
        			<tr>
        				<th>Product Name</th>
        				<th>Product Number</th>
        				<th>Payment</th>
        				<th>Status</th>
        			</tr>
        		</thead>
        		<tbody>
        	    <tr>
        			<td>Kamel Ketchup</td>
        			<td>762231</td>
        			<td>Due</td>
        			<td class="warning">Pending</td>
        			<td class="primary">Details</td>
        		</tr>
        	    <tr>
        			<td>Kamel Hot Sauce</td>
        			<td>108752</td>
        			<td>Due</td>
        			<td class="warning">Pending</td>
        			<td class="primary">Details</td>
        		</tr>
        		<tr>
        			<td>Kamel Tomato Sauce</td>
        			<td>128970</td>
        			<td>Cancelled</td>
        			<td class="danger">Declined</td>
        			<td class="primary">Details</td>
        		</tr>
        		<tr>
        			<td>Kamel Milk</td>
        			<td>392085</td>
        			<td>Paid</td>
        			<td class="success">Delivered</td>
        			<td class="primary">Details</td>
        		</tr>
        		<tr>
        			<td>Kamel Yogurt</td>
        			<td>365719</td>
        			<td>Paid</td>
        			<td class="success">Delivered</td>
        			<td class="primary">Details</td>
        		</tr>
        		<tr>
        			<td>Gami Soap</td>
        			<td>901112</td>
        			<td>Due</td>
        			<td class="warning">Pending</td>
        			<td class="primary">Details</td>
        		</tr>
        		<tr>
        			<td>Gami Lotion</td>
        			<td>988786</td>
        			<td>Due</td>
        			<td class="warning">Pending</td>
        			<td class="primary">Details</td>
        		</tr>
        		<tr>
        			<td>Gami Shampoo</td>
        			<td>922131</td>
        			<td>Refunded</td>
        			<td class="danger">Declined</td>
        			<td class="primary">Details</td>
        		</tr>
        		<tr>
        			<td>Gami Conditioner</td>
        			<td>991131</td>
        			<td>Due</td>
        			<td class="warning">Pending</td>
        			<td class="primary">Details</td>
        		</tr>

        		</tbody>
        	</table>
        	<a href="#">Show all</a>
		</div>
	</main>
	<div class="right">
	<div class="top">
		<button id="menu-btn">
			<span class="material-icons-sharp">menu</span>
		</button>
	<div class="theme-toggler">
		<span class="material-icons-sharp active">light_mode</span>
		<span class="material-icons-sharp">dark_mode</span>
	</div>	
	<div class="profile">
		<div class="info"><p>Hey <b>Malik</b></p>
			<small class="text-muted">CEO</small>
        </div>
        <div class="profile-photo">
        	<img src="malik.jpg">
        </div>
    </div>
</div>
<div class="recent-updates">
	<h2>Recent Updates</h2>
	<div class="updates">
		<div class="update">
			<div class="profile-photo">
				<img src="mia.jpg">				
			</div>
			<div class="message">
				<p><b>Mia Ferrera</b></p><p>Requested next week leave.</p>
				<small class="text-muted">4 minutes ago</small>
			</div>
		</div>
				<div class="update">
			<div class="profile-photo">
				<img src="anna.jpg">				
			</div>
			<div class="message">
				<p><b>Husna Yusuf</b></p><p>Requested a raise</p>
				<small class="text-muted">58 minutes ago</small>
			</div>
		</div>
				<div class="update">
			<div class="profile-photo">
				<img src="singh.jpg">				
			</div>
			<div class="message">
				<p><b>Singh Kumar</b></p><p>Finished his task for closing a deal with an investor</p>
				<small class="text-muted">24 minutes ago</small>
			</div>
		</div>
	</div>
</div>

</div>
</div>

<script>
	const themeToggler = document.querySelector(".theme-toggler");

	themeToggler.addEventListener('click', () => {
		document.body.classList.toggle('dark-theme-variables');
	})
</script>

</body>
</html>