<?php
$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['emailAddress']);
$major = htmlspecialchars($_POST['major']);
$comments = htmlspecialchars($_POST['comments']);
?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h1> Welcome user: <?php echo $username; ?></h1>
<h1> mailto: <a href="mailto:<?=$email ?>"><?=$email ?></a></h1>
<h1> Major: <?php echo $major; ?></h1>
<h1> Comments: <?php echo $comments; ?></h1>

</body>

</html>
