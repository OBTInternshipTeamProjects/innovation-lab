<?php
	require "../../app/start.php";
	
	$pages = $db->query("
		SELECT name,email,company,phone,referrer,message 
		FROM contact
	")->fetchAll(PDO::FETCH_ASSOC);
	
	require VIEW_ROOT . '/admin/list.php';
?>