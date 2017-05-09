<?php 
	require 'app/start.php';
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone_number'];
		$company = $_POST['company'];
		$referred = "none"; // $_POST['name'];
		$message = $_POST['message'];
		
		$insertContact = $db->prepare("
			INSERT INTO contact(name,email,company,phone,referrer,message)
			VALUES (:name,:email,:company,:phone,:referred,:message)
		");
		$insertContact->bindParam(":name",$name);
		$insertContact->bindParam(":email",$email);
		$insertContact->bindParam(":company",$company);
		$insertContact->bindParam(":phone",$phone);
		$insertContact->bindParam(":referred",$referred);
		$insertContact->bindParam(":message",$message);
		
		$insertContact->execute();
	}
	
	require VIEW_ROOT . '/home.php';
?>