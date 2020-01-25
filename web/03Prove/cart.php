<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
</head>

<?php
$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['emailAddress']);
$major = htmlspecialchars($_POST['major']);
$comments = htmlspecialchars($_POST['comments']);
$_SESSION["cart"] = ($_POST['item']);
?>


<body>
<h1>Your Cart:</h1>
<form method="POST" action="checkout.php">
<ul>
<?
foreach ($_SESSION["cart"] as $_SESSION["cart"]){
    $_SESSION["cart"]=htmlspecialchars($_SESSION["cart"]);
    echo "<li><p>$_SESSION["cart"]</p></li>";
}
?>
</ul>
<input type="submit" value="Checkout">
</form>
</body>

</html>
