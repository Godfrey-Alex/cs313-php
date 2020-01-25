<?php
$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['emailAddress']);
$major = htmlspecialchars($_POST['major']);
$comments = htmlspecialchars($_POST['comments']);
$cart = ($_POST['item']);
?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h1>Your Cart:</h1>
<ul>
<?
foreach ($cart as $cart){
    $$cart=htmlspecialchars($cart);
    echo "<li><p>$cart</p></li>";
}
?>
</ul>
<h1> Comments: <?php echo $comments; ?></h1>

</body>

</html>
