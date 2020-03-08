<!DOCTYPE html>
<html>
<head>
    <title>Begin it</title>
<link href="style.css" rel="stylesheet" type="text/css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
    <li><a href="#" style="color: lightgrey;">Rooms</a></li>
    <li><a href="Contact.php">Contact</a></li>
  </ul>

  <div class="row" style="color: #fff; overflow: hidden; margin-bottom: 150px;">
    <div class="col-md-6">
      <h2 class="text-center" style="font-family: Blackadder ITC; font-size: 40px; margin-top: 130px;">We Have Different</h2><br>
      <h1 class="text-center" style="font-size: 60px;font-family: algerian;">Room Types</h1>
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





	  <!-- Here ends navbar -->
<!--	Here is Room in article list view  -->
	   <div class="article-list" style="margin-top: 20px;margin-bottom: 20px; padding: 30px;">
        <div class="container">
            <div class="intro">
                <h1 class="text-center" style="font-family: algerian; margin-bottom: 30px;"><u>Rooms</u></h1>
                <!-- <h3 class="text-center" style="font-family: algerian">Room Types</h3> -->
            </div>
            <div class="row articles text-center">
               <div class="col-sm-6 col-md-4 item"><a href="Room/S_room.php"><img class="img-fluid polaroid" src="images/1.jpg" width="100%" height="350px"></a>
                    <h3 class="name">Single Room</h3><a class="btn btn-primary" type="button" href="Registration.php">Register</a><a class="btn btn-danger" type="button" data-toggle="modal" data-target="#SS" >Details</a>
                    
                    <div class="modal fade" id="SS" role="dialog">
                    <div class="modal-dialog">
                      
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Details Of Single Seater</h4>
                        </div>
                        <div class="modal-body">
                                        
                          <i style="font-size:60px; color:Brown"><img src="https://img.icons8.com/dusk/64/000000/single-bed.png" width="60px" height="60px" alt="Bed"></i>
                          <p class="black-text-muted mb-5 pb-2">Comfortable which makes your stay stable</p>

                            <i style="font-size:60px;"><img src="https://img.icons8.com/cute-clipart/64/000000/wifi.png" width="60px" height="60px" alt="wifi"></i> 
                          <p class="black-text-muted mb-5 pb-2">High Speed internet for surfing</p>

                          <i style="align-items: center;" ><img src="https://img.icons8.com/dusk/64/000000/tableware.png" width="60px" height="60px" alt="food"></i>
                          <p class="black-text-muted mb-5 pb-2">Delicious and Hygenic Food which is Good for health</p>

                          <i> <img src="./images/api_gateway.png" width="60px" height="60px" alt="esewa"></i>
                          <p class="black-text-muted mb-5 pb-2">Online Payment For Reserving the Seat and You can also book offline for that contact us</p>

                          <i style="font-size:60px"><img src="https://img.icons8.com/doodle/48/000000/parking--v1.png"width="60px" height="60px" alt="parking"></i>
                          <p class="black-text-muted mb-5 pb-2">We have facility parking Bikes</p>

                        </div>
                      </div>
                      </div>
                  </div>
                    </div>
                  <!-- single Room Modal Ends-->
                  
                  <div class="col-sm-6 col-md-4 item"><a href="Room/D_room.php"><img class="img-fluid polaroid" src="images/2.jpg" width="100%" height="350"></a>
                    <h3 class="name">Double Seater Room</h3>
                    <p class="description"></p><a class="btn btn-primary" role="button" href="Registration.php">Register</a><a class="btn btn-danger" type="button" data-toggle="modal" data-target="#DD">Details</a></a></div>
                	
                  <!-- Double Seater Description Modal -->
                  <div class="modal fade" id="DD" role="dialog">
                    <div class="modal-dialog">
                      
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Details Of Double Seater</h4>
                        </div>
                        <div class="modal-body">
                       
                          <i style="font-size:60px; color:Brown"><img src="https://img.icons8.com/officel/80/000000/kids-bedroom.png" width="60px" height="60px" alt="Bed"></i>
                          <p class="black-text-muted mb-5 pb-2">Comfortable which makes your stay stable and Roommates which will makes You feel like home</p>

                            <i style="font-size:60px;"><img src="https://img.icons8.com/cute-clipart/80/000000/wifi.png" width="60px" height="60px" alt="wifi"></i> 
                          <p class="black-text-muted mb-5 pb-2">High Speed internet for surfing</p>

                          <i style="align-items: center;" ><img src="https://img.icons8.com/dusk/64/000000/tableware.png" width="60px" height="60px" alt="food"></i>
                          <p class="black-text-muted mb-5 pb-2">Delicious and Hygenic Food which is Good for health</p>

                          <i> <img src="./images/api_gateway.png" width="60px" height="60px" alt="esewa"></i>
                          <p class="black-text-muted mb-5 pb-2">Online Payment For Reserving the Seat and You can also book offline for that contact us</p>

                          <i style="font-size:60px"><img src="https://img.icons8.com/doodle/48/000000/parking--v1.png"width="60px" height="60px" alt="parking"></i>
                          <p class="black-text-muted mb-5 pb-2">We have facility parking Bikes</p>

                        </div>
                      </div>
                      </div>
                  </div>
                 
                  <!-- Double Room Modal -->
                  
                   <div class="col-sm-6 col-md-4 item"><a href="Room/T_room.php"><img class="img-fluid polaroid" src="images/3.jpg"  width="100%" height="350"></a>
                    <h3 class="name">Triple Seater Room</h3><a class="btn btn-primary" role="button" href="Registration.php">Register</a><a class="btn btn-danger" role="button" data-toggle="modal" data-target="#TT">Details</a></a></div>
           <!-- Double Seater Description Modal -->
           <div class="modal fade" id="TT" role="dialog">
                    <div class="modal-dialog">
                      
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Details Of Triple Seater</h4>
                        </div>
                        <div class="modal-body">
                       
                          <i style="font-size:60px; color:Brown"><img src="https://img.icons8.com/officel/80/000000/kids-bedroom.png" width="60px" height="60px" alt="Bed"></i>
                          <p class="black-text-muted mb-5 pb-2">Comfortable which makes your stay stable and Roommates which will makes You feel like home</p>

                            <i style="font-size:60px;"><img src="https://img.icons8.com/cute-clipart/80/000000/wifi.png" width="60px" height="60px" alt="wifi"></i> 
                          <p class="black-text-muted mb-5 pb-2">High Speed internet for surfing</p>

                          <i style="align-items: center;" ><img src="https://img.icons8.com/dusk/64/000000/tableware.png" width="60px" height="60px" alt="food"></i>
                          <p class="black-text-muted mb-5 pb-2">Delicious and Hygenic Food which is Good for health</p>

                          <i> <img src="./images/api_gateway.png" width="60px" height="60px" alt="esewa"></i>
                          <p class="black-text-muted mb-5 pb-2">Online Payment For Reserving the Seat and You can also book offline for that contact us</p>

                          <i style="font-size:60px"><img src="https://img.icons8.com/doodle/48/000000/parking--v1.png"width="60px" height="60px" alt="parking"></i>
                          <p class="black-text-muted mb-5 pb-2">We have facility parking Bikes</p>

                        </div>
                      </div>
                      </div>
                  </div>
           
            </div>
        </div>
    </div>

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
<!--	here ends the list view of room  -->
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