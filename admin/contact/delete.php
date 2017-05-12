<?php
	require '../../app/start.php';
	
	if(isset($_GET['email']) ){
		$deletePage = $db->prepare("DELETE FROM contact WHERE email = :email");
		$deletePage->execute(['email' => $_GET['email']]);
	}
	
	
header('Location: ' . BASE_URL . '/admin/contact/index.php');
die();
?>