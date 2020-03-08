<!DOCTYPE html>
<?php
$error = NULL;

 if(isset($_POST['submit'])){
    //Get form data
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $parentname = $_POST['parentname'];
    $phone2 = $_POST['phone2'];
    $citizenship = $_POST['citizenship'];
    $blood = $_POST['blood'];
    
    $mysqli = new MySQLi('localhost','root','','test');
    
    $name = $mysqli->real_escape_string($name);
    $birthday = $mysqli->real_escape_string($birthday);
    $email = $mysqli->real_escape_string($email);
    $phone = $mysqli->real_escape_string($phone);
    $address = $mysqli->real_escape_string($address);
    $parentname = $mysqli->real_escape_string($parentname);
    $phone2 = $mysqli->real_escape_string($phone2);
    $citizenship = $mysqli->real_escape_string($citizenship);
    $blood = $mysqli->real_escape_string($blood);
    
    $vkey = md5(time().$name);
    
    $insert = $mysqli->query("insert into accounts(vkey,name,email,birthday,phone,address,parentname,parentnumber,citizenship,blood) values
    ('$vkey','$name','$email','$birthday','$phone','$address','$parentname','$phone2','$citizenship','$blood')");
    
 if($insert){
                // send the email verification
                $verificationLink = "http://localhost/start/verify.php?vkey=". $vkey;
 
                $htmlStr = "{style='background-color:blue;'}";
                $htmlStr .= "Hi " . $name . ",<br /><br />";
 
                $htmlStr .= "Please click the button below to verify your E-mail and complete the Booking of Room.<br /><br /><br />";
                $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";
 
                $htmlStr .= "Kind regards,<br />";
                $htmlStr .= "<a href='http://localhost/start/' target='_blank'>The Sanju Boys Hostel</a><br />";
 
 
                $name = "The Sanju Boys Hostel";
                $email_sender = "rabindrasah79@gmail.com";
                $subject = "Verification Link | The Sanju Boys Hostel";
                $recipient_email = $email;
 
                $headers  = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8 \r\n";
                $headers .= "From: {$name} <{$email_sender}> \n";
 
                $body = $htmlStr;
 
                // send email using the mail function, you can also use php mailer library if you want
                mail($recipient_email, $subject, $body, $headers);
                header('location:welcome.php');
               	}
	else{
		echo $mysqli->error;
	}
}
?>
<html>
<head>
    <title>Begin it</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="jquery-ui.min.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
    body{
    background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
}
    .navbody{
      background-image: linear-gradient(rgba(4, 4, 4, 0.4),rgba(4, 4, 4, 0.4)),url(images/hotel.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
    .navbody ul{
      margin: auto;
      margin-top:30px;
      padding: 10px;
    }
    .navbody ul li{
      font-family: verdana;
      margin-left: 50px;
      font-size: 20px;
      display: inline-block;
      letter-spacing: 2.5px;
      border-style: inset;
      padding: 20px;
      border-width: 4px;
      border-left-color: #F26E6E;
      border-top-color: #F26E6E;
    background-color: #ff000005;
    }
    .navbody ul li a{
      color: whitesmoke;
    text-decoration: none;
    }
    .navbody ul li a:hover{
      text-decoration: none;

    }
    .polaroid {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    #back2Top {
    width: 40px;
    line-height: 40px;
    overflow: hidden;
    z-index: 999;
    display: none;
    cursor: pointer;
    -moz-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
    position: fixed;
    bottom: 50px;
    right: 0;
    background-color: #DDD;
    color: #555;
    text-align: center;
    font-size: 30px;
    text-decoration: none;
}
#back2Top:hover {
    background-color: #DDF;
    color: #000;
}

  </style>
  </head>
  <body>

<div class="container-fluid navbody" style="">

  <ul class="text-center">
    <li><a href="index.php" >Home</a></li>
    <li><a href="room.php" style="color: lightgrey;">Rooms</a></li>
    <li><a href="Contact.php">Contact</a></li>
  </ul>

  <div class="row" style="color: #fff; overflow: hidden; margin-bottom: 50px;">
    <h1 align="text-center" style="font-size: 40px;font-family: algerian; margin: auto;margin-top: 30px;">Request for Registration</h1>
  
  </div>
  
</div>
<!--	Form	-->
	
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins" style="padding-top: 50px; padding-bottom: 50px; margin-bottom: -80px;">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form name="RegForm" method="POST" action="" onSubmit="validate()">
						
                        <div class="input-group">
							<label class="title"<span style='font-size:18px'the 	>Full Name:</label>
                            <input class="input--style-3" type="text" placeholder="Name" name="name">
                        </div> 
						<div class="input-group">
							<label class="title"<span style='font-size:18px'>Date of Birth:</label>
                            <input name="birthday" class="input--style-3 " type="date" placeholder="Birthdate">
                         </div>
                        <div class="input-group">
							<label class="title" <span style='font-size:18px'>Email:</label>
                            <input class="input--style-3" type="email" placeholder="Email@mail.com" name="email">
                        </div> 
                    <div class="input-group">
						<label class="title" <span style='font-size:18px'>Address:</label>
                        <input type="text" name="address" class="input--style-3" id="address" placeholder="Enter your Address">
                    </div> 

                    <div class="input-group">
						<label class="title" <span style='font-size:18px'>Contact number:</label>
                        <input type="tel" name="phone" class="input--style-3" id="phone" placeholder="98xxxxxxxx">
                    </div> 

                    <div class="input-group">
						<label class="title"<span style='font-size:18px'>Parent Name:</label>
                        <input type="text" name="parentname" class="input--style-3" id="parent_name" placeholder="Enter Parent's Name">
                    </div> 

                    <div class="input-group">
						<label class="title" <span style='font-size:18px'>Parent number:</label>
                        <input type="tel" name="phone2" class="input--style-3" id="phone_2" placeholder="98xxxxxxxx">
                    </div> 
                    <div class="input-group">
						<label class="title" <span style='font-size:18px'>Choose your blood group:</label>
                        <select class="input--style-3" name="blood">
                            <option >----Select Your Blood Group----</option>
                            <option name="A+" value="A+">A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>0-</option>
                        </select>
                    </div>

                    <div class="input-group">
						<label class="title" <span style='font-size:18px'>Enter your citizenship:</label>
                        <input type="number" name="citizenship" class="input--style-3" id="citizenship" placeholder="xxxx/xxx xx-xx-xx-xxxxx.">
                    </div> 
                     <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="submit" value="register">Submit</button>
                        </div>
                    </form>
					<?php
					echo $error; 
					?>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

<a id="back2Top" title="Back to top" href="#">&#10148;</a>
<script type="text/javascript">
	/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
</script>
</body>
<footer class="footer-distributed">

			<div class="footer-left">

		<a href="index.php"><img class="img-responsive2"       
       src="logo.jpg" width="200" height="100" ></a>

				<p class="footer-links">
					<a href="index.php">Home</a>
					·
					<a href="Rooms.php">Room</a>
					·
					<a href="contact.php">Contact</a>
				</p>

				<p class="footer-company-name">The sanju Boys Hotel © 2020</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Subidhanagar-Tinkune</span> Kathmandu,Nepal</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+977-9817836063</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					We provide best accomdation for every person who comes to stay with Us.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>	