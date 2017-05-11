
 
<h1>Contacts</h1><br><br><br>
<<<<<<< HEAD
<form action="delete.php" id="contacts_delete" method="post">
=======
<form action="delete_contacts.php" id="contacts_delete" method="post">
>>>>>>> d850a359ec9c9ac55c0287bcacec501e8631861a
<table>
<?php
	echo "<tr><th>delete</th><th>name</th><th>email</th><th>company</th><th>referrer</th><th>message</th></tr>";
	 foreach($pages as $array)
	 {
		echo "<tr>";
		 echo  "<th><input type=\"checkbox\" name=\" delete[]\" value=\"". $array['email']."\"></th> "."<th>".$array['name']."</th><th>".$array['email']."</th><th>".$array['company']."</th><th>".$array['referrer']."</th><th>".$array['message']."</th>";
		echo "</tr>";
	 }
?>
</table> 
<input type="button" name="enter_value" type="submit" value="DELETE">
</form>
