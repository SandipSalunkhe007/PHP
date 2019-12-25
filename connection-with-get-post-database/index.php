<?php 
	include_once('connection.php');	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="postuser.php">
	    <label>First Name</label>
	    <input type="text" name="first_name" id="first_name" placeholder="first_name"/><br/><br/>
	    <label>Last Name</label>
	    <input type="text" name="last_name" id="last_name" placeholder="last_name"/><br/><br/>
	    <input type="Submit" value="Submit" />
	</form>
</body>
</html>