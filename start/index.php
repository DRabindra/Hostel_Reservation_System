<!DOCTYPE html>
<html>
<head>
    <title>Begin it</title>
	<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
  	body{
  		background: linear-gradient(#0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
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
    <li><a href="#" style="color: lightgrey;">Home</a></li>
    <li><a href="Room.php">Rooms</a></li>
    <li><a href="Contact.php">Contact</a></li>
  </ul>

  <div class="row" style="color: #fff; overflow: hidden; margin-bottom: 150px;">
    <div class="col-md-6">
      <h2 class="text-center" style="font-family: Blackadder ITC; font-size: 40px; margin-top: 130px;">Welcome To</h2><br>
      <h1 class="text-center" style="font-size: 60px;font-family: algerian;">The <br> Sanju Boys Hostel</h1>
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
<!-- about -->
<div class="container" style="margin-top: 30px; margin-bottom: 20px;font-family: sans-serif;">
  <div class="row">
    <div class="col-md-6 ">
      <img src="images/hostelabout.jpg" style="width: 100%;" class="polaroid">
    </div>
    <!-- end of first div -->
    <div class="col-md-6 underline">
      <h1  align="center" style="font-family: algerian">About Us</h1><br></br>
      <P style="font-size: 20px;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </P>
    </div>
  </div>
</div>
<!-- about end -->

<!-- facilities -->
<div class="container-fluid polaroid" style="background-color: #292c2f; color: whitesmoke; margin-bottom: 20px;margin-top: 30px;padding: 30px;box-shadow: 25px red">

  <h1  align="center" style="font-family: algerian;color: #fff;"><u>Facilities</u></h1><br></br>

  <div class="container ">

    <div class="row" style="padding: 20px;margin-bottom: 40px;">
      <div class="col-md-4 text-center">
        <i class="fa fa-home"  style="font-size: 80px; text-shadow:2px 2px 4px #000000;"></i>
        <h3 style="font-size: 20px; font-weight: bold;">Spacious Rooms</h3>
      </div>
      <div class="col-md-4 text-center">
        <i class="fa fa-bath"  style="font-size: 80px; text-shadow:2px 2px 4px #000000; "></i>
        <h3 style="font-size: 20px; font-weight: bold;">Shower Bathroom</h3>
      </div>
      <div class="col-md-4 text-center">
        <i class="fa fa-wifi"  style="font-size: 80px; text-shadow:2px 2px 4px #000000; "></i>
        <h3 style="font-size: 20px; font-weight: bold;">Internet & Television</h3>
      </div>
    </div>

    <div class="row" style="padding: 20px;margin-bottom: 40px;">
      <div class="col-md-4 text-center">
        <i class="fa fa-unlock"  style="font-size: 80px; text-shadow:2px 2px 4px #000000; "></i>
        <h3 style="font-size: 20px; font-weight: bold;">Personal Locker</h3>
      </div>
      <div class="col-md-4 text-center">
        <i class="fa fa-bell"  style="font-size: 80px; text-shadow:2px 2px 4px #000000;"></i>
        <h3 style="font-size: 20px; font-weight: bold;">Time Table</h3>
      </div>
      <div class="col-md-4 text-center">
        <i class="fa fa-apple"  style="font-size: 80px; text-shadow:2px 2px 4px #000000; "></i>
        <h3 style="font-size: 20px; font-weight: bold;">Nice & Clean Food</h3>
      </div>
    </div>

  </div>
  
</div>

<!-- facilities end -->

	<div class="team-boxed text-center">
    <div class="container">
        <div class="intro">
            <h1 class="text-center" align="center" style="font-family: algerian;"><u>Team </u></h1>
            <h3 class="text-center" style="font-size: 20px;font-family: algerian;"><span>Testomonials</span></h3>
        </div>
        <div class="row people">
            <div class="col-md-6 col-lg-4 item polaroid" style="padding:50px; ">
                <div class="box"><img class="rounded-circle" src="images/test.jpg">
                    <h3 class="name">Owner</h3>
                    <p class="title">Owner</p>
                    <p class="description">Word Goes here</p>
                    <div class="social"><a href="http://pinterest.com" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/b8Xt2lN8TCKhilmoHXGW_TCjqF6FgS86WoWzUOQCh_pinterest.png"> </a>
            <a href="http://www.twitter.com/" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/ueBIjxRoTBuYR6XWW1iO_v3qVW5nRUq5VZF9RQXi2_twitter.png"> </a>
            <a href="http://www.facebook.com/" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/MsIJsIsDT9WLAxxH4aIK_OgdHV3vxSR2737LGd8cq_facebook.png"> </a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item polaroid" style="padding:50px; ">
                <div class="box"><img class="rounded-circle" src="images/test.jpg">
                    <h3 class="name">Warden</h3>
                    <p class="title">Warden</p>
                    <p class="description">word goes here</p>
                    <div class="social"><a href="http://pinterest.com" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/b8Xt2lN8TCKhilmoHXGW_TCjqF6FgS86WoWzUOQCh_pinterest.png"> </a>
            <a href="http://www.twitter.com/" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/ueBIjxRoTBuYR6XWW1iO_v3qVW5nRUq5VZF9RQXi2_twitter.png"> </a>
            <a href="http://www.facebook.com/" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/MsIJsIsDT9WLAxxH4aIK_OgdHV3vxSR2737LGd8cq_facebook.png"> </a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item polaroid" style="padding:50px;">
                <div class="box"><img class="rounded-circle" src="images/test.jpg" >
                    <h3 class="name">Owner</h3>
                    <p class="title">owner</p>
                    <p class="description">word goes here</p>
                    <div class="social"><a href="http://pinterest.com" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/b8Xt2lN8TCKhilmoHXGW_TCjqF6FgS86WoWzUOQCh_pinterest.png"> </a>
            <a href="http://www.twitter.com/" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/ueBIjxRoTBuYR6XWW1iO_v3qVW5nRUq5VZF9RQXi2_twitter.png"> </a>
            <a href="http://www.facebook.com/" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/MsIJsIsDT9WLAxxH4aIK_OgdHV3vxSR2737LGd8cq_facebook.png"> </a></div>
                </div>
            </div>
        </div>
    </div>
</div>
	  <script>
	  var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}</script>

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