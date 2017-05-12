
<h1>Contacts</h1><br><br><br>
<table>
<thead>
	<th>Name</th>
	<th>Email</th>
	<th>Company</th>
	<th>Phone</th>
	<th>Referrer</th>
	<th>Message</th>
	<th></th>
</thead>
<tbody>
	<?php foreach($pages as $contact): ?><tr>
		<td><?php echo $contact['name']; ?></td>
		<td><?php echo $contact['email']; ?></td>
		<td><?php echo $contact['company']; ?></td>
		<td><?php echo $contact['phone']; ?></td>
		<td><?php echo $contact['referrer']; ?></td>
		<td><?php echo $contact['message']; ?></td>
		<td><a href="<?php echo BASE_URL;?>/admin/contact/delete.php?email=<?php echo e($contact['email']); ?>">Delete</a></td>
	</tr><?php endforeach; ?>
</tbody>

</table> 
<button type="submit"> Delete </button>
<?php
	/* echo "<tr><th>delete</th><th>name</th><th>email</th><th>company</th><th>referrer</th><th>message</th></tr>";
	 foreach($pages as $array)
	 {
		echo "<tr>";
		 echo  "<th><input type=\"checkbox\" name=\"delete[]\" value=\"". $array['email']."\"></th> "."<th>".$array['name']."</th><th>".$array['email']."</th><th>".$array['company']."</th><th>".$array['referrer']."</th><th>".$array['message']."</th>";
		echo "</tr>";
	 } */
	 
?>
<!-- <input type="submit" name="enter_value" value="DELETE">-->
</body>
</html>