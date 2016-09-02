<?php
// Connect to the database.
require($_SERVER['DOCUMENT_ROOT'].'/project1/config/database.php');

// Begin to retrieve post values from student form - PERSONAL DETAILS.
$FIRST_NAME = mysqli_real_escape_string($DB_CONNECTION, trim(strtoupper($_POST['first-name'])));
$LAST_NAME = mysqli_real_escape_string($DB_CONNECTION, trim(strtoupper($_POST['last-name'])));
$GENDER = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['gender']));
$EMAIL = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['email']));
$MOBILE = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['mobile']));
$DOB = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['dob']));
$PROGRAM_LEVEL = mysqli_real_escape_string($DB_CONNECTION, trim(strtoupper($_POST['program-level'])));
$POSTAL = mysqli_real_escape_string($DB_CONNECTION, trim(strtoupper($_POST['postal'])));
$ADDRESS = mysqli_real_escape_string($DB_CONNECTION, trim(strtoupper($_POST['address'])));
// End of post value variables - PERSONAL DETAILS.

$NOK_FNAME = mysqli_real_escape_string($DB_CONNECTION, trim(strtoupper($_POST['nok_fname'])));
$NOK_LNAME = mysqli_real_escape_string($DB_CONNECTION, trim(strtoupper($_POST['nok_lname'])));
$NOK_MOBILE = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['nok_mobile']));
$NOK_EMAIL = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['nok_email']));
$NOK_REL = mysqli_real_escape_string($DB_CONNECTION, trim(strtoupper($_POST['nok_rel'])));

$STUDENT_ID = rand(10,100);
// Begin Database and Server request.
$QUERY = "INSERT INTO 
`students`(`id`, `first_name`, `last_name`, `dob`, `program_level`, `phone`, `email`, `postal`, `address`, `created_at`, `updated_at`) 
VALUES ('$STUDENT_ID','$FIRST_NAME','$LAST_NAME','$DOB','$PROGRAM_LEVEL','$MOBILE','$EMAIL','$POSTAL','$ADDRESS',NOW(),NOW())";
$STUDENT_REGISTER = mysqli_query($DB_CONNECTION, $QUERY) or die('Failed to register student. Please try again or contact administrator.');
// End of database and server request.

// Begin Database and Server request.
$QUERY = "INSERT INTO `next_of_kins`(`id`, `student_id`, `first_name`, `last_name`, `phone`, `email`, `relationship`, `created_at`, `updated_at`) 
VALUES ('','$STUDENT_ID','$NOK_FNAME','$NOK_LNAME','$NOK_MOBILE','$NOK_EMAIL','$NOK_REL',NOW(),NOW())";
$NOK_REGISTER = mysqli_query($DB_CONNECTION, $QUERY) or die('Failed to register student. Please try again or contact administrator.');
// End of database and server request.

// Conditional response.
if ($STUDENT_REGISTER && $NOK_REGISTER) {
	echo true;
}

// CLose server and database connection.
mysqli_close($DB_CONNECTION);
?>