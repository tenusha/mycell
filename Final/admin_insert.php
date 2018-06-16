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
			.user:hover{
				text-decoration: underline;
			}
		</style>
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
					$name=" "; $manufact=" "; $nprice=" "; $msg="Add New Item"; $prid=" "; $img=" "; $qty=" ";
					$nameerr=" "; $manufacterr=" "; $npriceerr=" "; $priderr=" "; $imgerr=" ";

					$con = mysqli_connect('localhost', 'root', '', 'ITA');
					
					if(mysqli_connect_errno()){
						echo 'Cannot connect to the database';
					}


					echo "<form name='insertForm' method='POST' action='admin_insert.php' enctype='multipart/form-data'><table align='center' cellspacing='25'><col width='130'><caption style='padding-top: 5%'><h2>".$msg."</h2></caption> 
							<tr>
								<td>Product ID :</td><td><input type='text' name='prID' size='75%' style='height: 35px;'></td>
							</tr>
							<tr>
								<td>Product Name :</td><td><input type='text' name='pname' size='75%' style='height: 35px;'></td>
							</tr>
							<tr>
								<td>Manufacturer :</td><td><input type='text' name='manu' size='75%' style='height: 35px;'></td>
							</tr>
							<tr>
								<td>Price :</td><td><input type='text' name='price' size='75%' style='height: 35px;'></td>
							</tr>
							<tr>
								<td>Quantity :</td><td><input type='text' name='qty' size='75%' style='height: 35px;'></td>
							</tr>
							<tr>
								<td>Image: </td><td><input type='file' name='imgfile' id='imgfile'></td>
							</tr>
							<tr><td></td>
								<td><input type='submit' name='sbtn' value='Save'>
									<input type='button' name='rbtn' value='Reset' onclick='return resetForm()'>
								</td>
							</tr></table>";
						if(isset($_POST['sbtn'])){
							$target="./Products-Phones/";
							$path=$target. basename($_FILES["imgfile"]["name"]);
							
							if(!empty($_POST['prID'])){
								$prid=$_POST['prID'];

								if(!empty($_POST['pname'])){
									$name=$_POST['pname'];

									if(!empty($_POST['manu'])){
										$manufact=$_POST['manu'];
										
										if(!empty($_POST['price'])){
											$nprice=$_POST['price'];
											
											if(!empty($_POST['qty'])){
												$qty=$_POST['qty'];
												mysqli_query($con, "INSERT INTO products VALUES ('".$prid."', '".$name."', '".$manufact."', '".$nprice."', '".$path."', '".$qty."', 'NULL')");
												echo '<script type="text/javascript">alert("Item Added Successfully !")</script>';
											}
											else echo '<script type="text/javascript">alert("Quantity cannot be empty !")</script>';
										}
										else echo '<script type="text/javascript">alert("Price cannot be empty !")</script>';
									}
									else echo '<script type="text/javascript">alert("Manufacturer cannot be empty !")</script>';
								}
								else echo '<script type="text/javascript">alert("name cannot be empty !")</script>';
							}
							else echo '<script type="text/javascript">alert("product id cannot be empty !")</script>';
						}
					mysqli_close($con);
				?>
			</div>
		</div>
	</body>
</html>
