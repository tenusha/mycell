<html>
	<head>
		<?php $con = mysqli_connect('localhost', 'root', '', 'ITA'); 
				if(mysqli_connect_errno()){
					echo 'Cannot connect to the database'.mysqli_error();
				}
		?>
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
		</style>
		<script type="text/javascript">
			function resetForm(){
				location.replace("admin_index.php");
			}
		</script>
	</head>
	<body>
		<div class="head">
			<img src="./Login/company_logo.png" width="10%" height="90%" style="padding-top: 0.5%; padding-left: 5%; padding-right: 80%;">
			<a href="../Web_Site_New_3_1/Profile.php" class="user"><p><?php echo $_SESSION['username'].' '.'<img src="./Index/t1.gif" height="15%" width="10%">'?></p></a>
		</div>
		<div class="body_content" style="display: flex;">
			<div id="sidebar" style="height: 600px;">
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
			<div id="content" style="height: 600px;">
				<?php 
					$id= $_SERVER["QUERY_STRING"];
					$msg="REMOVE"; $removeid=" "; $nresult=" ";

					$result=mysqli_query($con, "SELECT* FROM products WHERE pID='".$id."'");

					echo "<form name='removeForm' method='POST' action='admin_remove.php'><table align='center' cellspacing='25'><col width='130'><caption style='padding-top: 2%'><h2>".$msg."</h2></caption>";
					while($row=mysqli_fetch_array($result)){
						echo 
							"<tr>
								<td><table cellspacing='35'>
										<tr>
											<td>Product ID: </td><td><input type='text' name='prID' value='".$row[0]."' size='50%' style='height: 35px;'></td>
										</tr>
										<tr>
											<td>Product Name: </td><td><input type='text' name='pname' value='".$row[1]."' size='50%' style='height: 35px;'></td>
										</tr>
										<tr>
											<td>Manufacturer: </td><td><input type='text' name='manu' value='".$row[2]."' size='50%' style='height: 35px;'></td>
										</tr>
										<tr>
											<td>Price: </td><td><input type='text' name='price' value='".$row[3]."' size='50%' style='height: 35px;'></td>
										</tr>
										<tr>
											<td>Quantity: </td><td><input type='text' name='price' value='".$row[5]."' size='50%' style='height: 35px;'></td>
										</tr>
										<tr>
											<td></td>
											<td><input type='submit' name='sbtn' value='Remove Product'>
												<input type='button' name='rbtn' value='Back' onclick='return resetForm()'>	
											</td>
										</tr>
									</table>
								</td>
								<td><img src=".$row[4]." width='300px' height='350px'></td>
							</tr>
						</table>";
					}
					if(isset($_POST["sbtn"])){
						$removeid=$_POST['prID'];
						mysqli_query($con, "DELETE FROM products WHERE pID='$removeid'");
						header("location: admin_index.php");
					}
					mysqli_close($con);
				?>
			</div>
		</div>
	</body>
</html>
