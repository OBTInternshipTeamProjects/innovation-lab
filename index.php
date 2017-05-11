<?php 
	require 'app/start.php';
	
<<<<<<< HEAD
=======
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone_number'];
		$company = $_POST['company'];
		$referred = $_POST['referrer'];
		$message = $_POST['message'];
		
		$unique = $db->prepare('SELECT * FROM contact WHERE email = :email ');
		$unique->bindParam(":email" , $email);
		$unique->execute();
		$result = $unique->fetch(PDO::FETCH_ASSOC);
		
		if( !$result){
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
		else{
			echo "Email already exist!";
		}
	}
	
>>>>>>> d850a359ec9c9ac55c0287bcacec501e8631861a
	require VIEW_ROOT . '/home.php';
?>