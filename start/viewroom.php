<!DOCTYPE html>
<html>
<head>
    <title>Begin it</title>
<link href="style.css" rel="stylesheet" type="text/css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		table.dataTable thead .sorting:after,
		table.dataTable thead .sorting:before,
		table.dataTable thead .sorting_asc:after,
		table.dataTable thead .sorting_asc:before,
		table.dataTable thead .sorting_asc_disabled:after,
		table.dataTable thead .sorting_asc_disabled:before,
		table.dataTable thead .sorting_desc:after,
		table.dataTable thead .sorting_desc:before,
		table.dataTable thead .sorting_desc_disabled:after,
		table.dataTable thead .sorting_desc_disabled:before {
		  bottom: .5em;
		}
		h1{
			text-align: center;
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

  </style>
  </head>
  <body style="background-color: lightblue; ">
	<div class="container-fluid navbody" style="">

  <ul class="text-center">
    <li><a href="index.php" >Home</a></li>
    <li><a href="room.php" style="color: lightgrey;">Rooms</a></li>
    <li><a href="Contact.php">Contact</a></li>
  </ul>

  <div class="row" style="color: #fff; overflow: hidden; margin-bottom: 50px;">
  	<h1 class="text-center" style="font-size: 40px;font-family: algerian;">Available Seats</h1>
    <!-- <div class="col-md-6">
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

    </div> -->
  </div>
  
</div>
	  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT 	roomId, roomNo, blockId, noOfSeat, price FROM rooms where isActive='Y' order by roomId asc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='container jumbotron' style='margin-top:10px;margin-bottom:-60px;'><table id='detailspage' class='table table-striped table-bordered table-sm' cellspacing='0' width='100%'>
	<tr>
	<thead align='center'>
    <th class='th-sm'>RoomId
      </th>
      <th class='th-sm'>RoomNo
      </th>
	  <th class='th-sm'>BlockId
      </th>
      <th class='th-sm'>NoOfSeat
	  </th>
	  <th class='th-sm'>Price
      </th>
      <th class='th-sm'>Action
      </th>
    </thead>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
		<tbody>
			<tr>
				<td>".$row["roomId"]."</td>
				<td>".$row["roomNo"]."</td> 
				<td>".$row["blockId"]."</td> 
				<td>".$row["noOfSeat"]." </td> 
				<td>".$row["price"]." </td>
				<td>
					<button class='btn btn-success btn_payment' id='btn_payment' data-id='".$row["roomId"]."' data-price='".$row["price"]."'>
						Pay
					</button>
				</td>
			</tr>
		</tbody>";
 }
    echo "</table> </div>";
} else {
    echo "0 results";
}
$conn->close();
?>
	  <script type="text/javascript">
		$(document).ready(function () {
		$('#dtBasicExample').DataTable();
		$('.dataTables_length').addClass('bs-select');
		});

		$( document ).ready(function() {
			$( ".btn_payment" ).click(function() {
				if(window.location.href = "esewa.php"){
					let c_id = $(this).attr("data-id");
					let c_price = $(this).attr("data-price");
					localStorage.setItem("room_id", c_id);
					localStorage.setItem("room_price", c_price);
				}
				else{
					alert("Page not found")
				}

			});
		});
		
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