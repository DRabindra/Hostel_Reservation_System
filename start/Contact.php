<!DOCTYPE html>
<html>
<head>
    <title>Begin it</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="css/elements.css" rel="stylesheet" type="text/css">	
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
    .underline h1:after{
        position: absolute;
        content: '';
        height: 3px;
        margin: 0 auto;
        left: 0;
        right: 0;
        width: 50%;
        background: lightgrey;
        bottom: 260px;
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
    <li><a href="Room.php">Rooms</a></li>
    <li><a href="#" style="color: lightgrey;">Contact</a></li>
  </ul>

  <div class="row" style="color: #fff; overflow: hidden; margin-bottom: 150px;">
    <div class="col-md-6">
      <h2 class="text-center" style="font-family: Blackadder ITC; font-size: 40px; margin-top: 130px;">Get in Touch</h2><br>
      <h1 class="text-center" style="font-size: 60px;font-family: algerian;">Contact US</h1>
    </div>
    <div class="col-md-6">
      
      <div style="background-color: #dcdcdcb6; width: 50%; height: 45vh; margin: auto; padding: 30px; margin-top: 90px; border-style: solid; border-top-width: thin;">
        <form action="/action_page.php" style="width: 100%; color: #5A5959">
          <label>Email :</label><br>
          <input type="text" placeholder="E-mail" name="e-mail" class="form-control"><br></br>
          <label>Password :</label><br>
          <input type="text" placeholder="Password" name="psw" class="form-control"> <br></br>

          <button type="submit" class="btn btn-success" style="padding: 10px;width: 100px;">Login</button> 
          <button type="button" class="btn btn-danger" onclick="window.location.href='./Registration.php'" style="float: right;padding: 10px;width: 100px;">Register</button>
        </form>
      </div>

    </div>
  </div>
  
</div>




<!-- end of header -->

	  <div class="container">
<!-- Feedback Form Starts Here -->

<div class="row">
	<div class="col-md-6">
<div id="feedback" style="margin-top: 30px;" class="polaroid">
<!-- Heading Of The Form -->
<div class="head" >
<h3 style="color: green; font-weight: bold;">FeedBack Form</h3>
<p>This is feedback form. Send us your feedback !</p>
</div>
<!-- Feedback Form -->
<form action="#" id="form" method="post" name="form">
<input name="vname" placeholder="Your Name" type="text" value="" style="margin-bottom: 12px;">
<input name="vemail" placeholder="Your Email" type="text" value="" style="margin-bottom: 12px;">
<input name="sub" placeholder="Subject" type="text" value="" style="margin-bottom: 12px;">
<label>Your Suggestion/Feedback</label>
<textarea name="msg" placeholder="Type your text here..." style="margin-bottom: 12px;"></textarea>
<input id="send" name="submit" type="submit" value="Send Feedback" style="margin-bottom: 12px;">
</form>
<h3><?php include "./secure_email_code.php"?></h3>
</div>
<!-- Feedback Form Ends Here -->

</div>
<div class="col-md-6">
  <h1 align="center" style="color:green; font-family: algerian;font-weight: bold;padding: 10px;"><u>Location of the hostel</u></h1>
  <p style="text-align: center;" class="polaroid"><iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1940.378992653022!2d85.34271024482659!3d27.684280022912905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m3!3m2!1d27.684274799999997!2d85.3448727!4m0!5e0!3m2!1sen!2snp!4v1577164671654!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
</div>
</div></div>
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
					<a href="#">Home</a>
					·
					<a href="#">Room</a>
					·
					<a href="#">Contact</a>
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
</html>