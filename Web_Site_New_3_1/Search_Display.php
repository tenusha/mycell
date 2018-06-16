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


					<?php
						if(!isset($_SESSION['username'])) 
						{
                        
						$search=$_POST['n_search'];
						$result=mysqli_query($con," SELECT * FROM products WHERE name LIKE '%$search%' OR d_name LIKE '%$search%' OR manufact LIKE '%$search%' ");
		
						if(!$row=mysqli_fetch_array($result)){
						echo "<p style='margin-left:10%'><b>No Result Found For Your Search!!!!! Try Something Else!!!</b></p>";
						}
						else{

						do{
						echo"
						<div style='display:flex; border:4px solid orange; margin-left:10%; margin-right:10%; background-color:white'>
			
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
						while($row=mysqli_fetch_array($result));
						}
						$num = mysqli_num_rows($result);
						echo "<b style='margin-left:10%'>$num Matching Results Are Found !!!!!</b>";
						mysqli_close($con);

						}

						
						else{	
	 					$search=$_POST['li_search'];
						$result=mysqli_query($con," SELECT * FROM products WHERE name LIKE '%$search%' OR d_name LIKE '%$search%' OR manufact LIKE '%$search%' ");
		
						if(!$row=mysqli_fetch_array($result)){
						echo "<p><b>No Result Found For Your Search!!!!! Try Something Else!!!</b></p>";
						}
		
						else{
						do{
						echo"<div style='display:flex; border:4px solid orange; margin-left:10%; margin-right:10%; background-color:white'>
			
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
						while($row=mysqli_fetch_array($result));
						}
						$num = mysqli_num_rows($result);
						echo "<b style='margin-left:10%'>$num Matching Results Are Found !!!!!</b>";
						mysqli_close($con);
					}
					
					?>

	<footer id="foot1" style="background-color: #989898; text-align: center; margin-top: 10px">MyCell (Pvt) Ltd, No 02, Ground Floor, Liberty Plaza, Colombo 03. Phone: +94 (0) 2333777 / +94 77 7883333</footer>
	</body>
</html>
