
<?php
	/*require "../../app/start.php";
	
	if( isset($_POST['submit'])  ){
		
		 $id_emails = $_POST['delete'];
		 foreach($id_emails as $i)
		 {
			 
			$delete = $db->prepare('DELETE FROM contact WHERE email = :email ');
			$delete->bindParam(":email" , $i);
			$delete->execute(); 
		 }
	}*/
	require '../../app/start.php';

if (isset($_GET['email'])) {
	$deletePage = $db->prepare("
		DELETE FROM contact
		WHERE email = :email

	");

	$deletePage->execute(['email' => $_GET['email']]);
}

?>

