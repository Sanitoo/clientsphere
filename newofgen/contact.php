<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="conn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="icon"  href="cls.png" />
</head>
<body>
<header class="header">
      <nav class="navbar">
        <h1 class="logo"><a href="#">CLIENTSPHERE</a></h1>
        <input type="checkbox" id="menu-toggle" />
        <label for="menu-toggle" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </label>
        <ul class="links">
          <li><a href="ofneg.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="buttons">
          <a href="login.php" class="signin">Sign In</a>
          <a href="register.php" class="signup">Sign Up</a>
        </div>
      </nav>
    </header>
</head>
<body>
    <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
        <div class="text-one"><a href="https://maps.google.com/?q=Nairobi%2C%20NP12" target="_blank">Nairobi, NP12</a></div>
        <div class="text-two"><a href="https://maps.google.com/?q=Mombasa%2006" target="_blank">Mombasa 06</a></div>
      </div>
        <div class="phone details">
        <i class="fas fa-phone-alt"></i>
        <div class="topic">Phone</div>
        <div class="text-one"><a href="tel:+254798935647" target="_blank">+2547 9893 5647</a></div>
        <div class="text-two"><a href="tel:+254734345678" target="_blank">+2547 3434 5678</a></div>
      </div>
        <div class="email details">
        <i class="fas fa-envelope"></i>
        <div class="topic">Email</div>
        <div class="text-one"><a href="mailto:clientsphere@gmail.com" target="_blank">clientsphere@gmail.com</a></div>
        <div class="text-two"><a href="mailto:info.sphere@gmail.com" target="_blank">info.sphere@gmail.com</a></div>
      </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" required>
        </div>
        <div class="input-box message-box">
          
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>