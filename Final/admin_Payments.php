<html>
	<head>
	<?php session_start(); ?>
		<style>
			.head{
				height: 8%;
				background-color: #2E343D;
				display: flex;
			}
			#sidebar{
				width: 18%;
				height: 100%;
				background-color: #637283;
				text-align: center;
				background-repeat: repeat;
			}
			.sidebutton{
				background-color: transparent;
				width: 100%;
				height: 5%;
				text-align: justify;
				color: white;
				text-decoration: none;
				padding-top: 5%;
				padding-left: 20%;
				
			}
			a{
				color: white;
				text-decoration: none;
			}
			.sidebutton:hover{
				background-color: #2E343D;
			}
			#content{
				background-color: #DDE0E4;
				width: 82%;
				height: 100%;
				background-repeat: repeat;
				
			}
			th{
				border-bottom: solid 1px;
			}
			::-webkit-input-placeholder{
				color: white;
				font-size: medium;
			}
			.search{
				background-color: transparent;
				width: 75%;
				border-style: none;
				font-size: medium;
				color: white;
			}
			.user:hover{
				text-decoration: underline;
			}
		</style>
		<script type="text/javascript">
			function resetForm(){
				location.reload();
			}
		</script>
	</head>
	<body>
		<div class="head">
			<img src="./Login/company_logo.png" width="10%" height="90%" style="padding-top: 0.5%; padding-left: 5%; padding-right: 80%;">
			<a href="../Web_Site_New_3_1/Profile.php" class="user"><p><?php echo $_SESSION['username'].' '.'<img src="./Index/t1.gif" height="15%" width="10%">'?></p></a>
		</div>
		<div class="body_content" style="display: flex;">
			<div id="sidebar" style="height: 633px;">
				<div style="display: flex; padding-top: 5%;">
					<div>
						<form method="POST" action="admin_search.php">
							<input type="text" name="search_1" class="search" style="width: 55%; border: solid 3px #2E343D; border-radius: 5px;">
							<input type="submit" value="search" style="width: 25%; background-color: #2E343D; border: solid 3px #2E343D; color: white; cursor: pointer;">
						</form>
					</div>
				</div>
				<div style="padding-top: 10%; color: white; font-size: larger; text-align: justify; padding-left: 12%; font-weight: lighter; padding-bottom: 5%;"><img src="./Index/orders.png" width="8%" height="3%" style="padding-right: 4%;">eCommerce</div>
				<div class="sidebutton"><img src="./Index/allProducts.png" width="9%" height="60%" style="padding-right: 3%;"><a href="admin_index.php">View Products</a></div>
				<div class="sidebutton"><a href="admin_insert.php"><img src="./Index/product.png" width="8%" height="60%" style="padding-right: 4%;">Add Products</a></div>
				<div class="sidebutton"><a href="admin_Customers.php"><img src="./Index/dashboard.png" width="8%" height="55%" style="padding-right: 4%;">Customers</a></div>
				<div class="sidebutton"><a href="admin_Payments.php"><img src="./Index/payment.png" width="8%" height="55%" style="padding-right: 4%;">Payment History</a></div>
				<div class="sidebutton"><a href="logout.php"><img src="./Index/logout.png" width="9%" height="60%" style="padding-right: 4%;">Log Out</a></div>
			</div>
			<div id="content" style="height: 633px;">
				<?php 
					$con = mysqli_connect('localhost', 'root', '', 'ITA');
					if(mysqli_connect_errno()){
						echo 'failed to connect to MySQL: '.mysqli_connect_error();
					}
					$sql= "SELECT* FROM payment_history";
					$result=mysqli_query($con,$sql);
					
					echo '<table style="text-align: center; width: 70%; padding-top: 2%;" align="center" cellspacing="20"><th>User name</th><th>model No</th><th>model Name</th><th>Price</th><th>Quantity</th><th>card Num</th><th>exp date</th><th>security code</th><th>Total</th>';
					while($row=mysqli_fetch_array($result)){
						echo 
						'<tr>
							<td>'.$row[0].'</td>
							<td>'.$row[1].'</td>
							<td>'.$row[2].'</td>
							<td>'.$row[4].'</td>
							<td>'.$row[5].'</td>
							<td>'.$row[6].'</td>
							<td>'.$row[7].'</td>
							<td>'.$row[8].'</td>
							<td>'.$row[9].'</td>
						</tr>';
					}						
					echo'</table>';

					mysqli_close($con);
				?> 

			</div>
		</div>
	</body>
</html>
