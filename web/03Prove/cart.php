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
<form method="POST" action="checkout.php">
<ul>
<?
foreach ($cart as $cart){
    $$cart=htmlspecialchars($cart);
    echo "<li><p>$cart</p></li>";
}
?>
</ul>
<input type="submit" value="Checkout">
</form>
</body>

</html>
