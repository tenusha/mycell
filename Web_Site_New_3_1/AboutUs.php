<!DOCTYPE html>

<?php
	include('dbconnect.php');
	include('Header.php');
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./HomePage/background.css">
		<style>
#t1{
	width:100%;
	background-color:black;
	border-collapse:collapse;
}
.t2{
	border-left:2px solid white;
	text-align:center;
	width:20%;
}
.a1{
	color:white;
	text-decoration:none;
	font-size:25px;
	font-weight:bold;
}
.table1{
	width: 260px;
	height: 35px;
	margin:20px;
}
		</style>
		<title>MyCell(Pvt) Ltd</title>
	</head>
	<body>

		</div>
		<div id="mainImage" style=" margin-left: 12%; margin-right: 10%; margin-top: 10px">
			<img id = "test1" src="./AboutUs/main.jpg" width="1053px" height="340px"  style="box-shadow: 1px 10px 20px #000000;">
		</div>
		<div style="margin-right: 9%; margin-left: 12%; background-color: white; padding-bottom: 1%">
			<h1 style="color: #aa7243; padding: 1%">About Us</h1>
			<div style="background-color: #fbe3cf; font-size: 25px; font-family: sans-serif; color:#db9356; padding: 2%; text-align: center; margin: 2%">MyCell (Pvt) Ltd. is proud to participate in serving the economy as a successful Cellular Phone company of Sri Lanka. We have been market researching to gain a successful start and here we are serving the needs of thousands of citizens from all over the country. Our efficient and timely services have made us not a mere cellular phone company but mobile phone business partners who ensure the best of services in all mobile phone related accessories within Sri Lanka. We have gained an excellent name as a mobile phone company in Sri Lanka and have been actively facilitating the people's needs with regard to mobile phones and accessories.</div>

			<h1 style="color: #aa7243; padding: 1%">Our Vision</h1>
			<div style="background-color:#fbe3cf; font-size: 25px; font-family: sans-serif; color:#db9356; padding: 2%; margin: 2%">Improve the service while reducing your costs</div>

			<h1 style="color: #aa7243; padding: 1%">Our Mission</h1>
			<div style="background-color: #fbe3cf; font-size: 25px; font-family: sans-serif; color: #db9356; padding: 2%; margin: 2%">To be the best mobile phone company in Sri Lanka, adding value with best services</div>

		</div>
		<footer id="foot1" style="background-color: #989898; text-align: center; margin-top: 10px">MyCell (Pvt) Ltd, No 02, Ground Floor, Liberty Plaza, Colombo 03. Phone: +94 (0) 2333777 / +94 77 7883333</footer>
		<?php
			mysqli_close($con);
		?>
	</body>
</html>