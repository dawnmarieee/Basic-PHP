<?php

	include('conn.php');
	
	$srcName = $_POST['txtname'];
	$srcUser = $_POST['txtuser'];
	$srcGender = $_POST['txtgender'];
	$srcAddress = $_POST['txtaddress'];
	$srcPassword = $_POST['txtpassword'];
	
		$stmt = $conn->prepare("INSERT INTO tb_user (username,name,gender,address,password) VALUES
		 (:username,:name,:gender,:address,:password)");
		 
		 $stmt->bindParam(':name',$srcName);
		 $stmt->bindParam(':username',$srcUser);
		 $stmt->bindParam(':gender',$srcGender);
		 $stmt->bindParam(':address',$srcAddress);
		 $stmt->bindParam(':password',$srcPassword);

		 $stmt->execute();
		 
		 header("location:index.php");

?>