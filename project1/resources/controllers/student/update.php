<?php
// Connect to the database.
require($_SERVER['DOCUMENT_ROOT'].'/project1/config/database.php');

$STUDENT_ID = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['student-id']));

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

$QUERY = "UPDATE `students` 
SET `first_name`='$FIRST_NAME',`last_name`='$LAST_NAME',`dob`='$DOB',`gender`='$GENDER',`program_level`='$PROGRAM_LEVEL',`phone`='$MOBILE',`email`='$EMAIL',`postal`='$POSTAL',`address`='$ADDRESS',`updated_at`= NOW() WHERE `student_id` = '$STUDENT_ID'";

$UPDATE = mysqli_query($DB_CONNECTION, $QUERY) or die('ERROR: '.mysqli_error($DB_CONNECTION));

if ($UPDATE) {
	echo true;
}

mysqli_error($DB_CONNECTION);
?>