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
		
		<div style="margin-top: 20px; margin-left: -50px">
			<img src="./Products/main.jpg" width=110% height="600px" style="position: absolute;">
		</div>
		<div>
			<h1 style="position: relative; text-align: center; padding-top: 2%; color: white">Technology Solutions</h1>
			<div style="display: flex; margin-left: 25%">
				<div style="padding-right: 20px"><a href="Phones.php"><img src="./Products/mobile.jpg" width = "200px" height="200px" style="position: relative; border-style: solid; border-width: 1px; border-color: white"></a>
				</div>
				<div style="padding-right: 20px"><a href="Phones.php"><img src="./Products/tab.jpg" width = "200px" height="200px" style="position: relative; border-style: solid; border-width: 1px; border-color: white"></a>
				</div>
				<div><a href="PhoneCovers.php"><input type="image" src="./Products/backcover.jpg" width = "200px" height="200px" style="position: relative; border-style: solid; border-width: 1px; border-color: white">
				</div>
			</div>
			<div style="display: flex; padding-top: 20px; margin-left: 33%">
				<div style="padding-right: 20px"><a href="HeadSets.php"><img src="./Products/handsfree.jpg" width = "200px" height="200px" style="position: relative; border-style: solid; border-width: 1px; border-color: white"></a>
				</div>
				<div style="padding-right: 20px"><a href="HeadSets.php"><img src="./Products/headset.jpg" width = "200px" height="200px" style="position: relative; border-style: solid; border-width: 1px; border-color: white"></a>
				</div>
			</div>
			<div><h1 style="position: relative; margin-top: 35px; text-align: center; color:white">Welcome To MyCell</h1></div>
		</div>

		<footer id="foot1" style="background-color: #989898; text-align: center; margin-top: 10px">MyCell (Pvt) Ltd, No 02, Ground Floor, Liberty Plaza, Colombo 03. Phone: +94 (0) 2333777 / +94 77 7883333</footer>
		<?php
			mysqli_close($con);
		?>
	</body>
</html>