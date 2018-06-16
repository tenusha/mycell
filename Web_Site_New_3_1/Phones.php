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
td.a9
{
	text-align: center;
	background-color: white;
	padding-right: 30px;
	width:20%;
	box-shadow: 1px 10px 20px #000000;
	border: 5px solid orange; 
}
ul  
{	
	list-style-type:none;
}
		</style>
		<title>MyCell(Pvt) Ltd</title>
	</head>
	<body>
		

			<?php
						if(!isset($_SESSION['username'])) 
						{


						$result=mysqli_query($con,"SELECT * FROM products WHERE pID LIKE '%PH%'");
		
						if (!$result) {
						die(mysqli_error($con));
						} 


						while($row=mysqli_fetch_array($result)){
						echo "<div style='display:flex; border:4px solid orange; margin-left:10%; margin-right:10%; background-color:white'>
			
						<div style='width:30%; height:200px; margin:10px'><img src='".$row['Image']."' height='100%' width='100%'></div>
				
						<div style='width:40%;'>
						<div><h3>".$row['name']."</h3></div>
						<div><h3>".$row['pID']."</h3></div>
						<div><h3>".$row['manufact']."</h3></div>
						<div><h3> Rs.".$row['price']."</h3></div>
						</div>
					
						<div style='width:40%;'>
						<a href='Ara.php'><img src='add-cart.png'></a>
						</div>
				
						</div>";
						}

					}




						else{	

						$result=mysqli_query($con,"SELECT * FROM products WHERE pID LIKE '%PH%'");
		
						if (!$result) {
						die(mysqli_error($con));
						} 


						while($row=mysqli_fetch_array($result)){
						echo "<div style='display:flex; border:4px solid orange; margin-left:10%; margin-right:10%; background-color:white'>
			
						<div style='width:30%; height:200px; margin:10px'><img src='".$row['Image']."' height='100%' width='100%'></div>
				
						<div style='width:40%;'>
						<div><h3>".$row['name']."</h3></div>
						<div><h3>".$row['pID']."</h3></div>
						<div><h3>".$row['manufact']."</h3></div>
						<div><h3> Rs.".$row['price']."</h3></div>
						</div>
					
						<div style='width:40%;'>
						<a href='cart_Action.php?".$row['pID']."'><img src='add-cart.png'></a>
						</div>
				
						</div>";
						}

					}
					mysqli_close($con);					
			?>


	<footer id="foot1" style="background-color: #989898; text-align: center; margin-top: 10px">MyCell (Pvt) Ltd, No 02, Ground Floor, Liberty Plaza, Colombo 03. Phone: +94 (0) 2333777 / +94 77 7883333</footer>
	</body>
</html>
