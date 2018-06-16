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
		</style>
		<title>MyCell(Pvt) Ltd</title>
	</head>

	<body>
		

		</div>
		<div id="mainImage" style=" margin-left: 12%; margin-right: 10%; margin-bottom: 320px; margin-top: 10px">
			<img id = "test1" src="./HomePage/main1.png" width="1040px" height="340px"  style="box-shadow: 1px 10px 20px #000000; position:absolute;">
			<input type="image" name="prev" src="./HomePage/Prev.png" width="5%" height="5%" onclick = "document.getElementById('test1').src='./HomePage/main2.jpg'" style="position: relative; top: 150px">
			<input type="image" name="next" src="./HomePage/Next.png" width="5%" height="5%" onclick = "document.getElementById('test1').src='./HomePage/main3.jpg'" style="position: relative; top: 150px; left: 932px">
		</div>
		<div id="bottom1">
			<div id="image3" style="display: flex; margin-top: 30px; text-align: justify">
				<div id="dv1" style="padding-left: 10px"><h3>iPhone 6 Plus</h3><img src="./HomePage/p1.jpg" width="318px" height="150px">
				<p style = "text-align: center;">iPhone 6 Plus, Model No : 45127H4, Manufacturer: Apple, Manu. Date :14/08/2014, Color : Black, Rs. 150,000</p>
				<p style="text-align: center"><input type="button" name="btn1" value="View More" onclick="location.href='./Phones.php'"></p>
				</div>
				<div id="dv2" style="padding-left: 25px"><h3>GN1200 Smart Cord</h3><img src="./HomePage/h1.jpg" width="318px" height="150px">
				<p style = "text-align: center">GN1200 Smart Cord, Model No : 7548n4, Manu. Date : 2017/01/20, Color : White/Black, Rs. 2,500</p>
				<p style = "text-align: center"><input type="button" name="btn1" value="View More" onclick="location.href='./HeadSets.php'"></p>
				</div>
				<div id="dv3" style="padding-left: 25px; padding-right: 5px"><h3 style="padding-top:-5px">Proof/Water Proof Cover</h3>
					<img src="./HomePage/b1.jpg" width="318px" height="150px" style="padding-top:-2px"></b> 
					<p style = "text-align: center;padding-top: 0px">C6009 Drop Proof/Water Proof Cover ,Modle No : C6009, Manufacturer: GunDam, Color : Orange, Rs 14,000</p>
					<p style = "text-align: center"><input type="button" name="btn1" value="View More" onclick="location.href='./PhoneCovers.php'"></p>
				</div>
			</div>
			<div id="end1" style="display: flex;">
				<div id="products" style="padding-left: 25px; width: 320px"><a href="Products.php"><h4 style="text-align: center">Our Products</h4></a><p>
					<ul style="list-style-type: none; padding-left:80px">
						<li><a class="atext" href="./Phones.php">Mobile Phones</li>
						<li><a class="atext" href="./Phones.php">Tablets</li>
						<li><a class="atext" href="./PhoneCovers.php">BackCovers</li>
						<li><a class="atext" href="./HeadSets.php">Mobile HeadSets</li>
						<li><a class="atext" href="./HeadSets.php">Mobile HandsFree</li>
					</ul>
				</p></div>
				<div id="abtUs" style="padding-left: 5px; width: 320px"><a href="AboutUs.php"><h4 style="text-align: center">About Us</h4></a><p style=" text-align: justify; ">MyCell (Pvt) Ltd is a premier mobile phones & accessories company in Sri Lanka. We are dealers of mobile phones & other related accessories
				</p></div>
				<div id="cntcUs" style="padding-left: 38px; width: 320px"><a href="ContactUs.php"><h4 style="text-align: center">Contact Us</h4></a><p style=" text-align: justify;">
					MyCell (Pvt) Ltd, No 02, Ground Floor, Liberty Plaza, Colombo 03.
<pre>Phone: +94 (0) 2333777 / +94 77 7883333
Fax  : +94 (0) 11 23337800
Email: info@mycell.com</pre>
				</p></div>
			</div>
		</div>
		<footer id="foot1" style="background-color: #989898; text-align: center; margin-top: 10px">MyCell (Pvt) Ltd, No 02, Ground Floor, Liberty Plaza, Colombo 03. Phone: +94 (0) 2333777 / +94 77 7883333</footer>
		<?php
			mysqli_close($con);
		?>
	</body>
</html>
