<?php
	require('db_login.php');

	//$databaseConnection = mysqli_connect($host, $username, $password) or die('Could not connect');
	//mysqli_select_db($databaseConnection, $databaseName) or die('');

	$postPreview = mysqli_query($databaseConnection, "SELECT id, Title, Skills,  Date,  SUBSTRING(Content, 1, 300) AS Content FROM posts") or die('Could not query');

	$rows = array();
        while($r = mysqli_fetch_assoc($postPreview)) {
                $rows[] = $r;
        }
        print json_encode($rows);

	mysqli_close($databaseConnection);
?>
