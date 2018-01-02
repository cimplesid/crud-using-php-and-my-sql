<?php 
include ('connection.php');
var_dump($_POST);
if (isset($_POST)) {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = md5($_POST['password']);
	$address = $_POST['address'];
	$id = isset($_POST['id'])?$_POST['id']:0;


if ($id>0) {
	echo $query="UPDATE table1 SET
	fname = '$fname';
	lname = '$lname';
	gender = '$gender';
	email = '$email';
	mobile = '$mobile';
	password = '$password';
	address = '$address'";
	 $query .="WHERE id ='$id'" ;
}
else{ echo $query="INSERT INTO table1(fname,lname,gender,email,password, mobile, address)VALUES('$fname','$lname','$gender','$email','$password','$mobile','$address')";


}
//var_dump($fname);
//echo " ";
//$query="INSERT INTO table1(fname,lname,gender,email,password, mobile, address)VALUES('$fname','$lname','$gender','$email','$password','$mobile','$address')";
mysqli_query($conn,$query);}
header('Location:list.php');

 ?>