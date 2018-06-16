<!DOCTYPE html>
<html>
<head>
	<title>MyCell(Pvt) Ltd</title>
	<link rel="stylesheet" type="text/css" href="./Cart/cart.css">
	<link rel="stylesheet" type="text/css" href="./HomePage/background.css">
	<script type="text/javascript" src="purchase.js"></script>
</head>
<body>


      <?php
        include('dbconnect.php');
        include('Header.php');
        $tot=$_SERVER["QUERY_STRING"];

      ?>


<div class="cartbox" style="margin-bottom: 15px;">
	<div class="box1" style="box-shadow: 1px 10px 20px #000000">
		
		<pre><img src="./Cart/card.jpg" style="width:50px;height:30px" class="radioimage" class="radio"><font class="radiofont"> Credit or debit card</font></pre><hr/> 
		<form name="myForm" action="purchase_Action.php" method="POST">
		<div>Card number<br/><input type="text" name="cno" value=""></div><br/>
		<div class="flex">
			<div class="formbox">Expiration date<br/><input type="date" name="expdate" value=""></div>
			<div>Security code<br/><input type="text" name="scode" value=""></div>
		</div><br/>
		<div class="flex">
			<div class="formbox">First name<br/><input type="text" name="fname" value=""></div>
			<div>Last name<br/><input type="text" name="lname" value=""></div>
		</div><br/>
		
		<div>Billing address<br/><textarea name="address" cols="24" rows="4"></textarea><br/><br/></div>
		<div align="right">
			<input type="button" class="canbutton" value="Cancel" onclick="window.location.assign('./index.php')">
		</div>
		
	</div>
	<div class="box2" style="box-shadow: 1px 10px 20px #000000">
		
		
		<table>
		<tr>
			<td><h4>Order total<h4></td>         
			<td  align="right" class="table2"><h4><?php echo 'Rs.'.$tot.'.00'; ?></h4></td>
		</tr>	
		</table>
		<p align="justify">
			By clicking <b>Confirm and Pay</b>, you agree to MyCell (Pvt) Ltd. <a href="//" class="foot">terms</a> and <a href="//" class="foot">Privacy Policy</a>. 
		</p>
		<div align="center"><input type="submit" name="confirmPay" onclick="return formValidate()" value="Confirm and Pay" class="paybutton"></div>
        </form>
	</div>
</div>
<div  id="end1" style="background-color:#0797C1  ;padding-bottom: 20px;box-shadow: 1px 10px 20px #000000;margin-left: 10%;margin-right: 10%;">
			<div style="display: flex;">
				<div id="products" style=" width: 35%"><a href="./Products.php"><h4 style="text-align: center">Our Products</h4></a><p>
					<ul style="list-style-type: none; padding-left:80px">
						<li><a class="atext" href="./Phones.php">Mobile Phones</li>
						<li><a class="atext" href="./Phones.php">Tablets</li>
						<li><a class="atext" href="./PhoneCovers.php">BackCovers</li>
						<li><a class="atext" href="./HeadSets.php">Mobile HeadSets</li>
						<li><a class="atext" href="./HeadSets.php">Mobile HandsFree</li>
					</ul>
				</p></div>
				<div id="abtUs" style="padding-left: 5px; width: 35%"><a href="./AboutUs.php"><h4 style="text-align: center">About Us</h4></a><p style=" text-align: justify; ">MyCell (Pvt) Ltd is a premier mobile phones & accessories company in Sri Lanka. We are dealers of mobile phones & other related accessories
				</p></div>
				<div id="cntcUs" style="padding-left: 38px; width: 35%;padding-right: 10px"><a href="./ContactUs.php"><h4 style="text-align: center">Contact Us</h4></a><p style=" text-align: justify;">
					MyCell (Pvt) Ltd, No 02, Ground Floor, Liberty Plaza, Colombo 03.
<pre>Phone: +94 (0) 2333777 / +94 77 7883333
Fax  : +94 (0) 11 23337800
Email: info@cellmobile.com</pre>
				</p></div>

			</div>
		
		<footer id="foot1" style="background-color: #989898; text-align: center; margin-top: 10px">MyCell (Pvt) Ltd, No 02, Ground Floor, Liberty Plaza, Colombo 03. Phone: +94 (0) 2333777 / +94 77 7883333</footer>

</div>
</body>
</html>
