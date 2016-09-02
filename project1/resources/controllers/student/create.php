<?php
// Connect to the database.
require($_SERVER['DOCUMENT_ROOT'].'/project1/config/database.php');

// Begin to retrieve post values from student form - PERSONAL DETAILS.
$FIRST_NAME = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['first-name']));
$LAST_NAME = mysqli_real_escape_string($DB_CONNECTION, trim($POST['last-name']));
$EMAIL = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['email']));
$MOBILE = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['mobile']));
$DOB = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['dob']));
$PROGRAM_LEVEL = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['program-level']));
$POSTAL = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['postal']));
// End of post value variables - PERSONAL DETAILS.

// Begin Database and Server request.
$QUERY = "INSERT INTO 
`students`(`id`, `first_name`, `last_name`, `dob`, `program_level`, `phone`, `email`, `postal`, `address_id`, `nok_id`, `created_at`, `updated_at`) 
VALUES ('','$FIRST_NAME','$LAST_NAME','$DOB','$PROGRAM_LEVEL','$MOBILE','$EMAIL','$POSTAL',,[value-9],[value-10],[value-11],[value-12])";
$STUDENT_REGISTER = mysqli_query($DB_CONNECTION, $QUERY) or die('Failed to register student. Please try again or contact administrator.');
// End of database and server request.

// Conditional response.
if ($STUDENT_REGISTER) {
	echo true;
}

// CLose server and database connection.
mysqli_close($DB_CONNECTION);
?>