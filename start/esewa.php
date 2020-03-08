<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
	
</style>
</head>
<body style="background-image:linear-gradient(rgba(176, 109, 87, 0.4),rgba(74, 134, 59, 0.4)),url('images/bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: fixed; height: 100vh;">

	<div class="container">
	<form action="https://uat.esewa.com.np/epay/main" method="POST">
    <input value="40" name="tAmt" type="hidden">
    <input value="10" name="amt" type="hidden">
    <input value="10" name="txAmt" type="hidden">
    <input value="10" name="psc" type="hidden">
    <input value="10" name="pdc" type="hidden">
    <input value="epay_payment" name="scd" type="hidden">
    <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
    <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
			<div class="jumbotron" align="center" style="width: 400px; height:250px; margin: auto; margin-top: 250px; opacity: 0.8;" >
				<p style="margin-top: 40px;">Confirm Your Payment!!!</p>

    <input class="btn btn-success" value="Proceed to Esewa" type="submit">
	<a href="viewroom.php"><input class="btn btn-danger" value="Cancel payment" type="button" id="paymentcancel"></a>
		</div>
    </form>
</div>
    <script type="text/javascript">
        $(document).ready(function(){
            var room_price = localStorage.getItem("room_price");
            $( "input[name='tAmt']").val(room_price);
            $( "input[name='amt']").val(room_price);
            $( "input[name='txAmt']").val(0);
            $( "input[name='psc']").val(0);
            $( "input[name='pdc']").val(0);

            var path="https://uat.esewa.com.np/epay/main";
            var params= {
                amt: 10,
                psc: 10,
                pdc: 10,
                txAmt:10 ,
                tAmt: 40,
                pid: "ee2c3ca1-696b-4cc5-a6be-2c40d929d453",
                scd: "epay_payment",
                su: "http://merchant.com.np/page/esewa_payment_success",
                fu: "http://merchant.com.np/page/esewa_payment_failed"
            }

            function post(path, params) {
                var form = document.createElement("form");
                form.setAttribute("method", "POST");
                form.setAttribute("action", path);

                for(var key in params) {
                    var hiddenField = document.createElement("input");
                    hiddenField.setAttribute("type", "hidden");
                    hiddenField.setAttribute("name", key);
                    hiddenField.setAttribute("value", params[key]);
                    form.appendChild(hiddenField);
                }

                document.body.appendChild(form);
                form.submit();
            }
        });

        
    </script>

  <!--  <script type="text/javascript">
        $(document).ready(function(){
			$("#paymen")
		})
    </script>-->

</body>
</html>