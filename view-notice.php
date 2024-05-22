
<?php
//error_reporting(0);

$con=mysqli_connect("localhost","root","","nms"); 
if(1)
{
	$query2= "select * from notice";
	$res=mysqli_query($con, $query2);

	echo "<center><h2>NOTICES</h2></center>";
		while($rony=mysqli_fetch_array($res))
	{
	$a=$rony['id'];
	$b=$rony['name'];
	$d=$rony['sub'];
	$e=$rony['designation'];
	$f=$rony['description'];
		echo"<pre>";
	
	echo"<center><font color='red'> <h2>College Of Engineering,Pune <h2></font>";
	echo"<font color='brown'><h3> Noticed By : ", $b, "(",$e,")","<br/></font>";
	echo"</br>****=====*****=====*****=====*****=====*****=====*****=====*****=====*****=====*****=====*****</br>";
	
	echo"<h3> <font color='orange'><b> Subject : </b></font>", "<b>",$d ,"</b>";
	echo "<br/><p>", $f ,"</p>";

	echo"_________________________________________________________________________________________________________________</br>";
	echo"</pre>";
	}		
}
else
echo "no record found";															
?>
