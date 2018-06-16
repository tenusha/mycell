		<?php
			if(empty($_SESSION))
			{
				session_start();
			}
		?>
		<div class="head1">
			
			<div style="width:65%">
				<img src="./Header/company_logo.png" alt="MyCell Company Logo" style="width:560px;height:160px">
			</div>
			
			<div align="center"  style="width:35%;">
				<div>
					<table style="margin-left:14px">
					
						<?php
						if(!isset($_SESSION['username'])) 
						{
							
							echo"<tr><form name='normalSearch' method='POST' action='Search_Display.php'>
							<td><input style='width:250px;height:30px' type='text' name='n_search' placeholder='Search.....'' style='margin-left:94px'></td>
					
							<td><input class='button1'  type='submit' name='nbut_search' value='Search' style='width:80px;height:40px'></td>
							</form>";

							echo"<td rowspan='2'><a href='./Ara.php'><img src='./Header/login_button.png' alt='Log In' style='width:80px;height:60px'></a></td></tr>";
						}
						else 
						{
							
						 echo "<tr><td rowspan='2'><a href='./Profile.php'><img src='./Header/user-profile.png' alt='User-Image' style='width:80px;height:80px'></a></td>"; 
						 echo "<td colspan='2'>"."<pre id='p1'>"."Hi!!! ".$_SESSION['username']."</pre>"."</td></tr>"; 
						 echo "<tr>	
						<td><a href='./logout.php'><img src='./Header/logout-button.png' alt='Log Out' style='width:80px;height:40px'></a></td>	
						<td style='width:100%'><a href='./Cart.php'><img src='./Header/shopping-cart.png' alt='Checkout Cart' style='width:40px;height:40px'></a></td>
							</tr>"; 

						echo "<tr><form name='logInSearch' method='post' action='Search_Display.php'>
							  <td colspan='2'><input type='text' name='li_search' placeholder='Search.....'></td>
							  <td><input class='button1'  type='submit' name='lbut_search' value='Search' style='width:80px;height:40px'></td>
							  </form></tr>";	

						}
						?>
                
					</table>
				</div>
				
			</div>
		</div>
			
		
		<br>
		
		<div class="head2">
			<table id="t1">
				<tr>
					<td class="t2" style="border-left: none; :white"><a class="a1" href="index.php">HOME</a></td>
					<td class="t2"><a class="a1" href="AboutUs.php">ABOUT US</a></td>
					<td class="t2"><a class="a1" href="Products.php">PRODUCTS</a></td>
					<td class="t2"><a class="a1" href="ContactUs.php">CONTACT US</a></td>
				</tr>
			</table>
		</div>
