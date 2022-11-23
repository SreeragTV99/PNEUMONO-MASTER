<?php
include('connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phoneNumber'];
$qualification=$_POST['qualification'];
$address=$_POST['address'];
$district=$_POST['district'];
$photo=$_FILES['photo']['name'];
$tempname=$_FILES['photo']['tmp_name'];
$folder="pic/".$photo;

$password=$_POST['password'];

$res=mysqli_query($con, "insert into dregister (d_name,email,phone,qualification,address,district,photo,password,approve) values('$name','$email','$phone','$qualification','$address','$district','$photo','$password','pending')");
// header('location:ulog.php');
move_uploaded_file($tempname,"pic/".$photo);
if($res)
{
?>
<script>alert('SUCCESSFULL');window.location='ulog.php';</script>
<?php
}
else{
	
	?>
<script>alert('FAILD');window.location='dreg.php';</script>
<?php
}
?>