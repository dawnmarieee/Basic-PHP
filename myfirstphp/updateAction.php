<?php
	
	session_start();
	$curUsername = $_SESSION['username'];

	include('conn.php');

	$srcName = $_POST['txtname'];
	$srcUser = $_POST['txtuser'];
	$srcGender = $_POST['txtgender'];
	$srcAddress = $_POST['txtaddress'];
	$srcPassword = $_POST['txtpassword'];

	$sql = "UPDATE tb_user SET name=:name,username=:username where username = :pusername";

	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':name',$srcName);
	$stmt->bindParam(':pusername',$curUsername);
	$stmt->bindParam(':username',$srcUser);
	$stmt->bindParam(':gender',$srcGender);
	$stmt->bindParam(':address',$srcAddress);
	$stmt->bindParam(':password',$srcPassword);

	$stmt->execute();

	header("location:index.php");

?>