<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Begin it</title>
<link href="../style.css" rel="stylesheet" type="text/css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
body{
    margin-top:20px;
    background:#eee;
}

.prod-info-main {
    border: 1px solid #CEEFFF;
    margin-bottom: 20px;
    margin-top: 10px;
    background: #fff;
    padding: 6px;
    -webkit-box-shadow: 0 1px 4px 0 rgba(21,180,255,0.5);
    box-shadow: 0 1px 1px 0 rgba(21,180,255,0.5);
}

.prod-info-main .product-image {
    background-color: #EBF8FE;
    display: block;
    min-height: 238px;
    overflow: hidden;
    position: relative;
    border: 1px solid #CEEFFF;
    padding-top: 40px;
}

.prod-info-main .product-deatil {
    border-bottom: 1px solid #dfe5e9;
    padding-bottom: 17px;
    padding-left: 16px;
    padding-top: 16px;
    position: relative;
    background: #fff
}

.product-content .product-deatil h5 a {
    color: #2f383d;
    font-size: 15px;
    line-height: 19px;
    text-decoration: none;
    padding-left: 0;
    margin-left: 0
}

.prod-info-main .product-deatil h5 a span {
    color: #9aa7af;
    display: block;
    font-size: 13px
}

.prod-info-main .product-deatil span.tag1 {
    border-radius: 50%;
    color: #fff;
    font-size: 15px;
    height: 50px;
    padding: 13px 0;
    position: absolute;
    right: 10px;
    text-align: center;
    top: 10px;
    width: 50px;
}

.prod-info-main .product-deatil span.sale {
    background-color: #21c2f8
}

.prod-info-main .product-deatil span.discount {
    background-color: #71e134
}

.prod-info-main .product-deatil span.hot {
    background-color: #fa9442
}

.prod-info-main .description {
    font-size: 12.5px;
    line-height: 20px;
    padding: 10px 14px 16px 19px;
    background: #fff
}

.prod-info-main .product-info {
    padding: 11px 19px 10px 20px
}

.prod-info-main .product-info a.add-to-cart {
    color: #2f383d;
    font-size: 13px;
    padding-left: 16px
}

.prod-info-main name.a {
    padding: 5px 10px;
    margin-left: 16px
}

.product-info.smart-form .btn {
    padding: 6px 12px;
    margin-left: 12px;
    margin-top: -10px
}

.load-more-btn {
    background-color: #21c2f8;
    border-bottom: 2px solid #037ca5;
    border-radius: 2px;
    border-top: 2px solid #0cf;
    margin-top: 20px;
    padding: 9px 0;
    width: 100%
}

.product-block .product-deatil p.price-container span,
.prod-info-main .product-deatil p.price-container span,
.shipping table tbody tr td p.price-container span,
.shopping-items table tbody tr td p.price-container span {
    color: #21c2f8;
    font-family: Lato, sans-serif;
    font-size: 24px;
    line-height: 20px
}

.product-info.smart-form .rating label {
    margin-top:15px;
    
}

.prod-wrap .product-image span.tag2 {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 56px;
    height: 36px;
    border-radius: 50%;
    padding: 10px 0;
    color: #fff;
    font-size: 14px;
    text-align: center
}

.prod-wrap .product-image span.tag3 {
    position: absolute;
    top: 10px;
    right: 20px;
    width: 60px;
    height: 36px;
    border-radius: 50%;
    padding: 10px 0;
    color: #fff;
    font-size: 11px;
    text-align: center
}

.prod-wrap .product-image span.sale {
    background-color: #57889c;
}

.prod-wrap .product-image span.hot {
    background-color: #a90329;
}

.prod-wrap .product-image span.Available {
    background-color: #3B6764;
}
.shop-btn {
    position: relative
}

.shop-btn>span {
    background: #a90329;
    display: inline-block;
    font-size: 10px;
    box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset 0 -1px 0 rgba(0, 0, 0, .07);
    font-weight: 700;
    border-radius: 50%;
    padding: 2px 4px 3px!important;
    text-align: center;
    line-height: normal;
    width: 19px;
    top: -7px;
    left: -7px
}

.product-deatil hr {
    padding: 0 0 5px!important
}

.product-deatil .glyphicon {
    color: #3276b1
}

.product-deatil .product-image {
    border-right: 0px solid #fff !important
}

.product-deatil .name {
    margin-top: 0;
    margin-bottom: 0
}

.product-deatil .name small {
    display: block
}

.product-deatil .name a {
    margin-left: 0
}

.product-deatil .price-container {
    font-size: 24px;
    margin: 0;
    font-weight: 300;
    
}

.product-deatil .price-container small {
    font-size: 12px;
    
}

.product-deatil .fa-2x {
    font-size: 16px!important
}

.product-deatil .fa-2x>h5 {
    font-size: 12px;
    margin: 0
}

.product-deatil .fa-2x+a,
.product-deatil .fa-2x+a+a {
    font-size: 13px
}

.product-deatil .certified {
    margin-top: 10px
}

.product-deatil .certified ul {
    padding-left: 0
}

.product-deatil .certified ul li:not(first-child) {
    margin-left: -3px
}

.product-deatil .certified ul li {
    display: inline-block;
    background-color: #f9f9f9;
    padding: 13px 19px
}

.product-deatil .certified ul li:first-child {
    border-right: none
}

.product-deatil .certified ul li a {
    text-align: left;
    font-size: 12px;
    color: #6d7a83;
    line-height: 16px;
    text-decoration: none
}

.product-deatil .certified ul li a span {
    display: block;
    color: #21c2f8;
    font-size: 13px;
    font-weight: 700;
    text-align: center
}

.product-deatil .message-text {
    width: calc(100% - 70px)
}

@media only screen and (min-width:1024px) {
    .prod-info-main div[class*=col-md-4] {
        padding-right: 0
    }
    .prod-info-main div[class*=col-md-8] {
        padding: 0 13px 0 0
    }
    .prod-wrap div[class*=col-md-5] {
        padding-right: 0
    }
    .prod-wrap div[class*=col-md-7] {
        padding: 0 13px 0 0
    }
    .prod-info-main .product-image {
        border-right: 1px solid #dfe5e9
    }
    .prod-info-main .product-info {
        position: relative
    }
}
  
    .navbody{
      background-image: linear-gradient(rgba(4, 4, 4, 0.4),rgba(4, 4, 4, 0.4)),url(../images/hotel.jpg);
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
  <body>


<div class="container-fluid navbody" style="">

  <ul class="text-center">
    <li><a href="../index.php" >Home</a></li>
    <li><a href="#" style="color: lightgrey;">Rooms</a></li>
    <li><a href="../Contact.php">Contact</a></li>
  </ul>

  <div class="row" style="color: #fff; overflow: hidden; margin-bottom: 150px;">
    <div class="col-md-6">
      <h2 class="text-center" style="font-family: Blackadder ITC; font-size: 40px; margin-top: 130px;">Avalable Seat in</h2><br>
      <h1 class="text-center" style="font-size: 60px;font-family: algerian;">Triple Seater</h1>
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

<!-- Details page of single Room seater-->
<div class="container">
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/products/p4.png" class="img-responsive"> 
						<span class="tag2 hot">
							Available
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<!-- <h5 class="name">
							<a href="#">
								Product Code/Name here
							</a>
							<a href="#">
								<span>Product Category</span>
							</a>                            

						</h5> -->
						<p class="price-container">
							<span>$199</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>
                            <a href="javascript:void(0);" class="btn btn-info">More info</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/products/p1.png" alt="194x228" class="img-responsive"> 
						<span class="tag2 hot">
							HOT
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Product Code/Name here <span>Product Category</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$50</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>
                            <a href="javascript:void(0);" class="btn btn-info">More info</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>
<div class="col-xs-12 col-md-6">
<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/products/p2.png" alt="194x228" class="img-responsive"> 
						<span class="tag3 Available">
							Available
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Product Code/Name here <span>Product Category</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$299</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>
                            <a href="javascript:void(0);" class="btn btn-info">More info</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/products/p3.png" alt="194x228" class="img-responsive"> 
						<span class="tag2 Available">
							Available
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Product Code/Name here <span>Product Category</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$1000</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>
                            <a href="javascript:void(0);" class="btn btn-info">More info</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->


        
</div>


<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/products/p3.png" alt="194x228" class="img-responsive"> 
						<span class="tag2 Available">
							Available
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Product Code/Name here <span>Product Category</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$1000</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>
                            <a href="javascript:void(0);" class="btn btn-info">More info</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->


        
</div>

<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/products/p3.png" alt="194x228" class="img-responsive"> 
						<span class="tag2 Available">
							Available
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Product Code/Name here <span>Product Category</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$1000</span>
						</p>
						<span class="tag1">
            Available</span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>
                            <a href="javascript:void(0);" class="btn btn-info">More info</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->


        
</div>
</div>
</body>
	<footer class="footer-distributed">

			<div class="footer-left">

		<a href="../index.php"><img class="img-responsive2"       
       src="../logo.jpg" width="200" height="100" ></a>

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