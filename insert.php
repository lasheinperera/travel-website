<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'dbconfig.php';

$first_name = $_POST['first_name'] ?? "";
$last_name = $_POST['last_name'] ?? "";
$no_of_pax = intval($_POST['no_of_pax'] ?? "");
$package = $_POST['package'] ?? "";
$date_from = $_POST['date_from'] ?? "";
$date_to = $_POST['date_to'] ?? "";
$country = $_POST['country'] ?? "";
$tp = $_POST['tp'] ?? "";
$email = $_POST['email'] ?? "";
$message = $_POST['message'] ?? "";
$no_of_pax = intval($_POST['no_of_pax'] ?? "");

// Validate that tp is a 10-digit number
if (!preg_match('/^\d{10}$/', $tp)) {
  echo "Error: Invalid contact number. Contact number must be a 10-digit number.";
  exit;
}

$sql = "INSERT INTO booking (first_name, last_name, no_of_pax, package, date_from, date_to, country, tp, email, message) VALUES ('$first_name', '$last_name', '$no_of_pax', '$package', '$date_from', '$date_to', '$country', '$tp', '$email', '$message')";

if(mysqli_query($conn, $sql)) {
  echo "New record added.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thank You for Booking!</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
    main{
      height: 600px;
    }

		.container {
			margin: 0 auto;
			max-width: 600px;
			padding: 50px 20px;
			text-align: center;
		}

		h1 {
			color: #3C486B;
			font-size: 36px;
			margin-bottom: 20px;
		}

		p {
			font-size: 20px;
			margin-bottom: 30px;
		}

		button {
			background-color: #3C486B;
			border: none;
			border-radius: 5px;
			color: #fff;
			cursor: pointer;
			font-size: 20px;
			padding: 10px 20px;
			transition: all 0.3s ease-in-out;
		}

		button:hover {
			background-color: orange;
		}
    .footer-container{
    max-width: 1170px;
    margin:auto;
  }
  .footer-row{
    display: flex;
    flex-wrap: wrap;
  }
  footer ul{
    list-style: none;
  }
  .footer{
    background-color: #3C486B;
      padding: 70px 0;
  }
  .footer-col{
     width: 25%;
     padding: 0 15px;
     margin-left: 10vh;
  }
  .footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
  }
  .footer-col h4::before{
    content: '';
    position: absolute;
    left:0;
    bottom: -10px;
    background-color: #F45050;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
  }
  .footer-col ul li:not(:last-child){
    margin-bottom: 10px;
  }
  .footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
  }
  .footer-col ul li a:hover{
    color: #ffffff;
    padding-left: 8px;
  }
  .footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255,255,255,0.2);
    margin:0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
  }
  .footer-col .social-links a:hover{
    color: #24262b;
    background-color: #ffffff;
  }
  
  
	</style>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Packages</title>

    <!--stylesheet-->

	<!--Website-logo-->
    <link rel="icon" href="images/logo.png" type="image/png"/>

	<!--using-font-awsome-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<script src="https://kit.fontawesome.com/0fa81b909d.js" crossorigin="anonymous"></script>
</head>
<body>
  <main>
  <div class="container">
		<h1>Thank You for Booking!</h1>
		<p>Your booking has been received and we will get back to you soon.</p>
		<button onclick="location.href='home.html'">Back to Home</button>
	</div>
  </main>
	
  <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>content</h4>
                    <ul>
                        <li><a href="home.html">Home</a></li>
				<li><a href="aboutus.html">About Us</a></li>
				<li><a href="package.html">Tour Packages</a></li>
				<li><a href="WebTravel.html">Booking</a></li>
				<li><a href="gallery.html">Galleria</a></li>
               <li><a href="review.html">Reviews</a></li>
               <li><a href="login.html">Agent Log in</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact us</h4>
                    <ul>
                        <li><a href="#">call us: +94 112 485 5534</a></li>
                        <li><a href="#">email: pearlasia@gmail.com</a></li>
                        <li><a href="#">address: N0.822 Temple Road, Katunayake,Sri Lanka</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>  
</body>
</html>
