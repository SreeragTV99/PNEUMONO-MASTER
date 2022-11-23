<?php
$con=mysqli_connect('localhost','root','','pneumoniadetection');
$d_id=$_GET['d_id'];
if($res=mysqli_query($con,"update dregister set approve='approved' where d_id='$d_id'"))
{
	echo "<script>alert('SUCCESSFULL');window.location='mpulmonologists.php';</script>";
}
	
