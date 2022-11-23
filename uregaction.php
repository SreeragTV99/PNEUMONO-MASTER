<?php
include('connection.php');
$name=$_POST['name'];
$phone=$_POST['phoneNumber'];
$email=$_POST['email'];
$dob=$_POST['DOB'];
$password=$_POST['password'];

$res=mysqli_query($con, "insert into uregister (user_name,phone,email,dob,password) values('$name','$phone','$email','$dob','$password')");
// header('location:ulog.php');
if($res)
{
?>
<script>alert('SUCCESSFULL');window.location='ulog.php';</script>
<?php
}
else{
	
	?>
<script>alert('FAILD');window.location='ureg.php';</script>
<?php
}
?>