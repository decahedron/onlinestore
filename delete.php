<?php  
	$connect = mysqli_connect('127.0.0.1','root','','store');

	$delete_text = 'DELETE FROM items WHERE id = "'.$_GET['id'].'"';

	$delete_query = mysqli_query($connect, $delete_text);

	header('Location: index.php' );
?>