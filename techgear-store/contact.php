<?php

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['message'];

echo "Thank you $name, we received your message.";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>Contact Us</h1>
</header>

<nav>
<a href="index.php">Home</a>
<a href="products.php">Products</a>
<a href="contact.php">Contact</a>
</nav>

<div class="container">

<form method="post">

<input type="text" name="name" placeholder="Your Name" required><br><br>

<input type="email" name="email" placeholder="Your Email" required><br><br>

<textarea name="message" placeholder="Message"></textarea><br><br>

<button name="submit">Send Message</button>

</form>

</div>

<footer>
<p>Computer Accessories Store</p>
</footer>

</body>
</html>
