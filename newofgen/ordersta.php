<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-EDGE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ORDERS</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="ordersma.css">
</head>
<body>

<div class="container">
	<aside>
		<div class="top">
			<div class="logo">
			<img src="scls.png">
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

		<a href="ordersta.php" class="active">
			<span class="material-icons-sharp">receipt_long</span>
			<h3>Orders</h3>
		</a>

		<a href="analyseta.php">
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



        <div class="recent-orders">
        	<h1>Orders</h1>
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
        		<tr>
        			<td>Ami Jelly</td>
        			<td>945131</td>
        			<td>Due</td>
        			<td class="warning">Pending</td>
        			<td class="primary">Details</td>
        		</tr>
        		<tr>
        			<td>Ami Hair Oil</td>
        			<td>991131</td>
        			<td>Due</td>
        			<td class="warning">Pending</td>
        			<td class="primary">Details</td>
        		</tr>
        		<tr>
        			<td>Gami Conditioner</td>
        			<td>991131</td>
        			<td>Due</td>
        			<td class="warning">Pending</td>
        			<td class="primary">Details</td>
        		</tr>
        		<tr>
        			<td>Amia Milk</td>
        			<td>654131</td>
        			<td>Due</td>
        			<td class="warning">Pending</td>
        			<td class="primary">Details</td>
        		</tr>
        		<tr>
        			<td>Amia (fermented) Milk</td>
        			<td>664431</td>
        			<td>Due</td>
        			<td class="warning">Pending</td>
        			<td class="primary">Details</td>
        		</tr>

        		</tbody>
        	</table>
        	<a href="#">Show all</a>
		</div>
	</main>
	

	</div>
</div>

</div>
</div>
</body>
</html>