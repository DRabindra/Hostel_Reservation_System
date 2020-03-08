<!doctype html>
<?php
if(isset($_GET['vkey'])){
	$vkey = $_GET['vkey'];
	
	$mysqli = new MySQLi('localhost','root','','test');
	
	$resultset= $mysqli->query("select verified,vkey from accounts where verified = 0 and vkey = '$vkey' limit 1");
	if($resultset->num_rows == 1){
		$update = $mysqli->query("update accounts set verified = 1 where vkey ='$vkey' limit 1");
	if($update){
		echo "your account is verified";
		header('location:viewroom.php');
	}
		else{
			echo $mysqli->error;
		}
	}else{
		die("something");
	}
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Expired Link</title>
</head>

<body>
</body>
</html>
