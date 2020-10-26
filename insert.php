<?php  
	$connect = mysqli_connect('127.0.0.1','root','','store');

	$text_insert = "INSERT into items (title, description, img, price) VALUES ('".$_GET["title"]."', '".$_GET["description"]."', '".$_GET["img"]."',  '".$_GET["price"]."')";

	$query_insert = mysqli_query($connect, $text_insert);

	header('Location: index.php' );
?>

