<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-EDGE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CLIENTS</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="client.css">
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

            <a href="client.php" class="active">
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
		 <div class="staff">
        	<h1>Staff</h1>
        	<table>
        		<thead>
        			<tr>
        				<th>Name</th>
        				<th>Email</th>
        				<th>Title</th>
        				<th>Status</th>
        			</tr>
        		</thead>
        		<tbody>
        	     <tr>
        	    <tr>
        			<td class="profile-info">
        				<div class="profile-photo">
        				<img src="artur.jpeg">
        			</div>
        				<div class="name-email">
        			         <p>Artur Melo</p>
        		</div>
        			</td>
        			<td>artel17@gmail.com</td>	
        			<td>Supplier</td>
        			<td class="success">Complete</td>
        			<td class="primary"><a href="">Details</a></td>
        		</tr>
        		<tr>
        			<td class="profile-info">
        				<div class="profile-photo">
        				<img src="miss.jpeg">
        			</div>
        				<div class="name-email">
        			          <p>Grace Bon</p>
        		</div>
        			</td>	
        			<td>grabon121@gmail.com</td>
        			<td>Supplier</td>
        			<td class="warning">Pending</td>
        			<td class="primary"><a href="">Details</a></td>
        		</tr>
        		<tr>
        			<td class="profile-info">
        				<div class="profile-photo">
        				<img src="cory.jpeg">
        			</div>
        				<div class="name-email">
        			          <p>Cory Janes</p>
        		</div>
        			</td>
        			<td>cojary92@gmail.com</td>	
        			<td>Supplier</td>
        			<td class="danger">Incomplete</td>
        			<td class="primary"><a href="">Details</a></td>
        		</tr>
        		<tr>
        			<td class="profile-info">
        				<div class="profile-photo">
        				<img src="stacy.jpg">
        			</div>
        				<div class="name-email">
        			         <p>Stacy Knight</p>
        		</div>
        			</td>
        			<td>staknee19@gmail.com</td>	
        			<td>Investor</td>
        			<td class="success">Completed</td>
        			<td class="primary"><a href="">Details</a></td>
        		</tr>
        		<tr>
        			<td class="profile-info">
        				<div class="profile-photo">
        				<img src="tim.jpg">
        			</div>
        				<div class="name-email">
        			         <p>Timothy Fischerr</p>
        		</div>
        			</td>
        			<td>timfi57@gmail.com</td>	
        			<td>Investor</td>
        			<td class="warning">Pending</td>
        			<td class="primary"><a href="">Details</a></td>
        		</tr>
        		<tr>
        			<td class="profile-info">
        				<div class="profile-photo">
        				<img src="eris.jpg">
        			</div>
        				<div class="name-email">
        			         <p>Eris Casper</p>
        		</div>
        			</td>
        			<td>ercase62@gmail.com</td>	
        			<td>Investor</td>
        			<td class="warning">Pending</td>
        			<td class="primary"><a href="">Details</a></td>
        		</tr>
        		<tr>
        			<td class="profile-info">
        				<div class="profile-photo">
        				<img src="talal.jpg">
        			</div>
        				<div class="name-email">
        			         <p>Talal Hamid</p>
        		</div>
        			</td>
        			<td>talkiha32@gmail.com</td>	
        			<td>Supplier</td>
        			<td class="success">Completed</td>
        			<td class="primary"><a href="">Details</a></td>
        		</tr>
        		<tr>
        			<td class="profile-info">
        				<div class="profile-photo">
        				<img src="juan.jpg">
        			</div>
        				<div class="name-email">
        			         <p>Juan Gomez</p>
        		</div>
        			</td>
        			<td>jungoye49@gmail.com</td>	
        			<td>Supplier</td>
        			<td class="warning">Pending</td>
        			<td class="primary"><a href="">Details</a></td>
        		</tr>

        		</tbody>
        	</table>
        	<a href="tasks.php">Assign all</a>
		</div>
	</main>

    
    </div>
</div>
</div>
</div>
</body>
</html>