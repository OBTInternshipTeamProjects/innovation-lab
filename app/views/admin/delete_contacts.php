<?php
	require "../../app/start.php";
	
	if(isset($_POST['submit'])){
		 $id_emails = $_POST['delete'];
		 foreach($id_emails as $i)
		 {
			$id_email = $db->prepare('DELETE FROM contact WHERE email = :email ');
			$id_email->bindParam(":email" , $i);
			$id_email->execute();
		 }
	}
	else{
		
		echo " something.....";
	}

?>