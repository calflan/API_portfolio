<?php
	require('db_login.php');
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$post = mysqli_query($databaseConnection, "SELECT * FROM posts WHERE id=$id") or die('Could not query');
	} else {
		echo 'id is not present in url';
	}
	$rows = array();
	while($r = mysqli_fetch_assoc($post)) {
    		$rows[] = $r;
	}
	print json_encode($rows);
	mysqli_close($databaseConnection);
?>
