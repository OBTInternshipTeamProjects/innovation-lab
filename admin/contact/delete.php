<?php
	require '../../app/start.php';
<<<<<<< HEAD
	if(isset($_GET['id']) ){
=======
	if( isset($_GET['id']) ){
>>>>>>> d850a359ec9c9ac55c0287bcacec501e8631861a
		$deletePage = $db->prepare("DELETE FROM pages where id = :id");
		$deletePage->execute(['id' => $_GET['id']]);
	}
?>