<?php
// Connect to database.
require($_SERVER['DOCUMENT_ROOT'].'/project1/config/database.php');

// Retrieve id from form.
$PRIMARY_KEY = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['id']));

if(empty($PRIMARY_KEY)){
	die("Invalid parameters. Contact administrator.");
}else{
	$QUERY = "DELETE FROM `students` WHERE `id` = '$PRIMARY_KEY'";
	$DELETE = mysqli_query($DB_CONNECTION, $QUERY) or die('ERROR: '.mysqli_error($DB_CONNECTION));

	if ($DELETE) {
		echo true;
	}
}
// Close server and database connection.
mysqli_close($DB_CONNECTION);
?>