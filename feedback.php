<?php 

include('connection.php');

$q= "select * from feedback ";
$res=mysqli_query($con, $q);


echo "

	<font size='3' >
	
	<table  width='900' height='500'  text-align='left' border-collapse=collapse bgcolor='pink'>
	<tr >
	<th>  ID </th>
	<th>NAME </th>
	<th>SUBJECT </th>
	<th>FEEDBACK </th><tr>	";
	
	
	while($rony=mysqli_fetch_array($res))
	{
		
	$a=$rony['id'];
	$b=$rony['name'];
	$c=$rony['sub'];
	$d=$rony['feedback'];
	
	
	echo "
	
	<tr style= bgcolor='yellowgreen' color='white'>
		<td>  <b>$a</b> </td>
		<td>  <b>$b<b> </td>
		<td>  <b>$c<b> </td>
		<td>  <b>$d<b> </td>
	</tr>
	
	";
	
	}
	echo"</font></table>";
	
?>