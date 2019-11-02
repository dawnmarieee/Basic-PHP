<?php
	try{
		$conn = new PDO('mysql:host=127.0.0.1;dbname=sampledatabase;charset=utf8;','root','');
		//var dump($conn);
		
	} catch(Exception $e){
		echo "Connection Failed: " .$e->getMessage();
		die();
	}
?>