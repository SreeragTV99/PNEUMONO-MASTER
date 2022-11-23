<?php
session_start();
include('connection.php');
	
if(isset($_POST['submit'])){

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
//echo $password;
//$res=mysqli_query($con, "insert into dregister (d_name,email,phone,qualification,address,district,photo,password,approve) values('$name','$email','$phone','$qualification','$address','$district','$photo','$password','pending')");
$res=mysqli_query($con, "UPDATE `dregister` SET `d_name`='$name',`email`='$email',`phone`='$phone',`qualification`='$qualification',`address`='$address',`district`='$district',`photo`='$photo',`password`='$password' WHERE d_id=$_SESSION[did]");
// header('location:ulog.php');
move_uploaded_file($tempname,"pic/".$photo);
header('Location: updateprofile.php');
}
?>