<?php
	session_start();
	$User=$_SESSION["username"];

		
		$con=mysqli_connect('localhost','root','fedora','ITA');
		if(mysqli_connect_errno()){
			echo"Cannot connect to the database".mysqli_connect_errno();
		}
				
		$result1=mysqli_query($con,"SELECT * FROM cart WHERE user='$User'");
		
		//$row=mysqli_fetch_array($result1);
		$card=$_POST["cno"];
        $exp=$_POST["expdate"];
        $scode=$_POST["scode"];
        
        
		while($row=mysqli_fetch_array($result1)){
            $tot=$row[4]*$row[5];
            $result2="INSERT INTO payment_history VALUES('$User', '$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]', '$card', '$exp', '$scode', '$tot')";
            mysqli_query($con,$result2);
        }
        mysqli_query($con, "DELETE FROM cart WHERE user='$User'");
        
	

	echo"<script>alert('Transaction Successful');</script>";

	header("Refresh:0 ; url=/Web_Site_New_3_1/index.php");
	mysqli_close($con);
?>
