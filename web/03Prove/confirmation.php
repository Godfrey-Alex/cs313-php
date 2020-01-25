<?php
$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['emailAddress']);
$major = htmlspecialchars($_POST['major']);
$comments = htmlspecialchars($_POST['comments']);
$cart = ($_POST['$cart']);
?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h1>Thank You for your order</h1>
<p>It will be delivered to the following address:</p>
<form method="post" action="confirmation.php">
<ul>
<?
foreach ($cart as $cart){
    $$cart=htmlspecialchars($cart);
    echo "<li><p>$cart</p></li>";
}
?>
</ul>
Street: <input type="text" name="street"><br>
City: <input type="text" name="city"><br>
Zip: <input type="text" name="zip"><br>
State: <input type="text" name="state"><br>
Country: <input type="text" name="co"><br>
<input type="submit" value="Check Out">
</form>

</body>

</html>