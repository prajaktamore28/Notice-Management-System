<?php


$con=mysqli_connect("localhost","root","","sampledb"); 


$a=$_GET['id'];

$q="select * from updates where id='$a'";
$res=mysqli_query($con, $q);


while($rony=mysqli_fetch_array($res))
	{
		
	$a=$rony['id'];
	$b=$rony['name'];
	$c=$rony['email'];

	}
	

?>


<html>

<br><br>
<br><br>
<div align="center">
<form method="POST">
Enter your ID : <input type="number" name="a" value="<?php echo $a; ?>" required><br/>
Enter your name : <input type="text" name="b" value="<?php echo $b; ?>" required><br/>
Enter your Email Address : <input type="email" name="c" value="<?php echo $c; ?>" required><br/>

<br>
<input type="submit" name="submit" value="UPDATE VALUE">
</form>

</div>
</html>



<?php

	if (isset($_POST['submit']))
	{
	$con=mysqli_connect("localhost","root","","sampledb"); 


	$a=$_GET['id'];
	//echo "hi";

	$a1=$_POST['a'];
	$a2=$_POST['b'];
	$a3=$_POST['c'];



	$q2="update updates student SET id='$a1', name='$a2', email='$a3' where id='$a'";
	
	echo $q2;

	mysqli_query($con, $q2);

	echo "<script>alert('value is updated');window.location.href='change.php';</script>";
	}


?>


