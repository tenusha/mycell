<?php
    session_start();
    
	$con= mysqli_connect('localhost','root','','ITA');
	if(mysqli_connect_errno()){
		echo "Cannot connect to the database".mysqli_connect_error();
	}
	$model=$_SERVER["QUERY_STRING"];
	$user=$_SESSION['username'];

	$que="DELETE FROM cart WHERE model_no='$model' AND user='$user'";

	mysqli_query($con,$que);

	if(!mysqli_query($con,$que)){
		die('Error :'.mysqli_error($con));
	}

	header("Refresh:0 ; url=../Cart.php");

	mysqli_close($con);
?>
