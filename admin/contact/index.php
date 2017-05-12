<?php
	require "../../app/start.php";
	
	$pages = $db->query("
		SELECT * 
		FROM contact
	")->fetchAll(PDO::FETCH_ASSOC);
	
	require VIEW_ROOT . '/admin/list.php';
	
?>