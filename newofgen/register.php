<?php

error_reporting(E_ALL);
ini_set('display_errors', 1); 
include 'connectdatabase.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $user_type = $_POST['user_type'];
        $birthdate = $_POST['birthDate'];
        $gender = $_POST['gender'];
        $country = isset($_POST['country']) ? $_POST['country'] : '';
        $city = isset($_POST['city']) ? $_POST['city'] : '';

        $sql = "INSERT INTO users(firstname, middlename, lastname, email, password, user_type, birthDate, gender, country, city) VALUES ('$firstname', '$middlename', '$lastname', '$email', '$hashed_password', '$user_type', '$birthdate', '$gender', '$country', '$city')";

        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Registered Successfully";
        } else {
            die(mysqli_error($connect));
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Join us</title>
  <link rel="stylesheet" href="stoole.css">
  <link rel="icon" href="cls.png">
</head>
<body>

<header class="header">
  <nav class="navbar">
    <a href="#" class="logo">CLIENTSPHERE</a>
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" id="hamburger-btn">
      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
        <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </label>
    <ul class="links">
      <li><a href="ofneg.php">Home</a></li>
      <li><a href="abut.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="buttons">
      <a href="login.php" class="signin">Sign In</a>
      <a href="register.php" class="signup">Sign Up</a>
    </div>
  </nav>
</header>

<section class="container">
  <form method="POST" onsubmit="return onFormSubmit(event)">

    <header>Registration Form</header>
    <h2>Sign up</h2>
    <div class="input-box">
      <label for="firstname">First Name</label>
      <input type="text" name="firstname" id="firstname" placeholder="Enter first name" required>
      <div class="error" id="result1"></div>
    </div>
    <div class="input-box">
      <label for="middlename">Middle Name</label>
      <input type="text" name="middlename" id="middlename" placeholder="Enter middle name" required>
      <div class="error" id="result2"></div>
    </div>
    <div class="input-box">
      <label for="lastname">Last Name</label>
      <input type="text" name="lastname" id="lastname" placeholder="Enter last name" required>
      <div class="error" id="result3"></div>
    </div>
    <div class="input-box">
      <label for="email">Email Address</label>
      <input type="email" name="email" id="email" placeholder="Enter email address" required>
      <div class="error" id="result4"></div>
    </div>
    <div class="input-box">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Enter a password" required>
      <div class="error" id="result5"></div>
    </div>
    <div class="input-box">
      <label for="confirmpassword">Confirm Password</label>
      <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm password" required>
      <div class="error" id="result6"></div>
      <input type="hidden" name="user_type" value="user">
    </div>
    <div class="input-box">
      <label for="birthDate">Date of Birth</label>
      <input type="date" name="birthDate" id="birthDate" required>
      <div class="error" id="result7"></div>
    </div>
    <div class="gender-box">
      <h3>Gender</h3>
      <div class="gender-option">
        <div class="gender">
          <input type="radio" id="check-male" name="gender" value="male" checked>
          <label for="check-male">Male</label>
        </div>
        <div class="gender">
          <input type="radio" id="check-female" name="gender" value="female">
          <label for="check-female">Female</label>
        </div>
        <div class="gender">
          <input type="radio" id="check-other" name="gender" value="other">
          <label for="check-other">Other</label>
        </div>
      </div>
    </div>
    <label for="country">Country:</label>
      <select id="country"name="country" onchange="populateCities()" required> 
        <option value="">Select a country</option>
        <option value="America">America</option>
        <option value="Japan">Japan</option>
        <option value="India">India</option>
        <option value="Denmark">Denmark</option>
        <option value="Germany">Germany</option>
        <option value="UnitedKingdom">United Kingdom</option>
        <option value="Italy">Italy</option>
        <option value="Canada">Canada</option>
        <option value="Southafrica">South Africa</option>
        <option value="Kenya">Kenya</option>
        <option value="Spain">Spain</option>
        <option value="China">China</option>
        <option value="Nigeria">Nigeria</option>
        <option value="France">France</option>
        <option value="Brazil">Brazil</option>
</select>
<div class="error" id="result8"></div>



<div class="select-box">
  <label for="city">City:</label>
  <select id="city"name="city">
    <option value="" >Select City</option>
  </select>
  <div class="error" id="result9"></div>
</div>

    <button type="submit" name="submit">Submit</button>
  </form>
  <div>Already have an account?<a href="login.php">Login<a/></div>
</section>

<script>
const citiesByCountry = {
 America: ["New York", "Los Angeles", "Chicago", "Miami", "Houston", "Seattle", "San Francisco", "Boston", "Atlanta", "Dallas"],
 Japan: ["Tokyo", "Osaka", "Kyoto", "Yokohama", "Nagoya", "Sapporo", "Fukuoka", "Kobe", "Hiroshima", "Sendai"],
 India: ["Delhi", "Mumbai", "Bangalore", "Chennai", "Kolkata", "Hyderabad", "Pune", "Ahmedabad", "Jaipur", "Lucknow"],
 Denmark: ["Copenhagen", "Aarhus", "Odense", "Aalborg", "Esbjerg", "Randers", "Kolding", "Horsens", "Vejle", "Roskilde"],
 Germany: ["Berlin", "Munich", "Hamburg", "Frankfurt", "Cologne", "Stuttgart", "Dusseldorf", "Leipzig", "Dresden", "Bremen"],
 UnitedKingdom: ["London", "Manchester", "Bristol", "Birmingham", "Glasgow", "Liverpool", "Bristol", "Leeds", "Sheffield", "Newcastle"],
 Italy: ["Rome", "Milan", "Naples", "Turin", "Florence", "Venice", "Bologna", "Genoa", "Palermo", "Verona"],
 Canada: ["Toronto", "Vancouver", "Montreal", "Calgary", "Edmonton", "Ottawa", "Quebec", "Winnipeg", "Hamilton", "Halifax"],
 Southafrica: ["Johannesburg", "Cape Town", "Durban", "Pretoria", "Port Elizabeth", "Bloemfontein", "East London", "Nelspruit", "Polokwane", "Kimberley"],
 Kenya: ["Nairobi", "Mombasa", "Kisumu", "Nakuru", "Eldoret", "Malindi", "Thika", "Kakamega", "Meru", "Nyeri"],
 Spain: ["Madrid", "Barcelona", "Valencia", "Seville", "Bilbao", "Malaga", "Zaragoza", "Murcia", "Palma", "Granada"],
 China: ["Beijing", "Shanghai", "Guangzhou", "Shenzhen", "Chengdu", "Hangzhou", "Nanjing", "Wuhan", "Chongqing"],
 Nigeria: ["Lagos", "Abuja", "Kano", "Ibadan", "Port Harcourt", "Benin City", "Kaduna", "Jos", "Enugu", "Aba"],
 France: ["Marseille", "Strasbourg", "Bordeaux", "Lille", "Montpellier", "Rouen", "Metz", "Toulouse", "Nantes", "Nice", ],
 Brazil: ["Rio de janeiro", "Brasilia", "Salvador", "São Paulo", "Maceió", "Curitiba", "Manaus", "Fortaleza", "Recife", "Natal"],
};

function populateCities() {
  // Retrieve the country and city dropdown elements
  const countrySelect = document.getElementById("country");
  const citySelect = document.getElementById("city");

  // Retrieve the selected country value
  const selectedCountry = countrySelect.value;

  // Clear existing city options
  citySelect.innerHTML = '<option value="">Select City</option>';

  // Check if a country is selected
  if (selectedCountry !== "") {
    // Populate cities based on the selected country
    citiesByCountry[selectedCountry].forEach(city => {
      const option = document.createElement("option");
      option.value = city;
      option.textContent = city;
      citySelect.appendChild(option);
    });
  }
}



function validateForm(event) {
  event.preventDefault();

  const firstname = document.getElementById('firstname').value;
  const middlename = document.getElementById('middlename').value;
  const lastname = document.getElementById('lastname').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirmpassword').value;
  const birthdate = document.getElementById('birthDate').value;
  const country = document.getElementById('country').value;
  const city = document.getElementById('city').value;

  const regexAlphabet = /^[a-zA-Z]+$/;
  const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/;

  document.getElementById('result1').innerHTML = "";
  document.getElementById('result2').innerHTML = "";
  document.getElementById('result3').innerHTML = "";
  document.getElementById('result4').innerHTML = "";
  document.getElementById('result5').innerHTML = "";
  document.getElementById('result6').innerHTML = "";
  document.getElementById('result7').innerHTML = "";
  document.getElementById('result8').innerHTML = "";
  document.getElementById('result9').innerHTML = "";

  if (!firstname.match(regexAlphabet)) {
    document.getElementById('result1').innerHTML = "First name should only contain alphabets!";
    return false;
  }
  if (!middlename.match(regexAlphabet)) {
    document.getElementById('result2').innerHTML = "Middle name should only contain alphabets!";
    return false;
  }
  if (!lastname.match(regexAlphabet)) {
    document.getElementById('result3').innerHTML = "Last name should only contain alphabets!";
    return false;
  }
  if (email.indexOf("@") === -1 || email.length < 6) {
    document.getElementById('result4').innerHTML = "Enter a valid email address!";
    return false;
  }
  if (!password.match(passwordRegex)) {
    document.getElementById('result5').innerHTML = "Password must meet the following criteria:<br>" +
      "- At least 8 characters long" +
      "- Contains at least one uppercase letter" +
      "- Contains at least one lowercase letter" +
      "- Contains at least one digit" +
      "- Contains at least one special character<br>";
    return false;
  }
  if (password !== confirmPassword) {
    document.getElementById('result6').innerHTML = "Passwords do not match!";
    return false;
  }

const currentDate = new Date();
const userBirthdate = new Date(birthdate);
const userBirthYear = userBirthdate.getFullYear();
const currentYear = currentDate.getFullYear();

if (userBirthYear > currentYear) {
  document.getElementById('result7').innerHTML = "Invalid birth date. Please enter a valid birth date.";
  return false;
}

const age = currentYear - userBirthYear;

if (age < 18) {
  document.getElementById('result7').innerHTML = "You must be at least 18 years old to register.";
  return false;
}

  if (country === "") {
    document.getElementById('result8').innerHTML = "Please select a country!";
    return false;
  }

  if (city === "") {
    document.getElementById('result9').innerHTML = "Please select a city!";
    return false;
  }

  function onFormSubmit(event) {
  if (validateForm(event) && populateCities()) {
    return true; // Allow form submission
  }
  return false; // Prevent form submission
}

  alert("Form submission successful!");
  return true;
}

</script>
</body>
</html>