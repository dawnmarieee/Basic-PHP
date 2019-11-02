<?php
	include('conn.php');
	$curUser = $_POST['chk'];
	if(isset($_POST['btnedit'])){

	$sql = "SELECT * FROM tb_user where username * :username";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':username',$curUser);
	$stmt->execute();
	$data = $stmt->fetch(PDO::FETCH_ASSOC);
	session_start();

	$_SESSION['username'] = $data['username'];
	$_SESSION['name'] = $data['name'];
	$_SESSION['gender'] = $data['gender'];
	$_SESSION['address'] = $data['address'];
	$_SESSION['password'] = $data['password'];

	header("location:editentry.php");

	}else{

		$sql =  "DELETE FROM tb_user where username = :username";
		$stmt = $conn->prepare($sql);

		$stmt->bindParam(':username',$curUser);
		$stmt->execute();
		header("location:index.php");
	}

?>