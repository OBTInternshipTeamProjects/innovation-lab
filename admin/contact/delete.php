<?php
	require '../../app/start.php';
	if( isset($_GET['id']) ){
		$deletePage = $db->prepare("DELETE FROM pages where id = :id");
		$deletePage->execute(['id' => $_GET['id']]);
	}
?>