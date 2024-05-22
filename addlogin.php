<?php
  
	//error_reporting(0);
	$con= mysqli_connect("localhost","root","","nms"); 	// database connection


	if(isset($_POST['submit']))
	{
		$b1=$_POST['u'];
		$c1=$_POST['p'];
		
		$q2="select * from login where username='$b1' and password='$c1' ";
	
	
		$res=mysqli_query($con,$q2);
	
		if (mysqli_num_rows($res)==1)
			{
		
			echo "<script>alert('successfully login done');window.location.href='next.php';</script>";

			}
		else
			{
			echo "<script>alert('fail to login');</script>";
			}
	
		
	}
	
?>
