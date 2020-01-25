<?php
session_start();
$username = $_SESSION["user_name"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Items</title>
</head>
<body>
	<h1>Welcome <?php echo $username ?></h1>
</body>
</html>