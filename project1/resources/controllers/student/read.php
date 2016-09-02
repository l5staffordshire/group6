<?php
// Connect to the database.
require($_SERVER['DOCUMENT_ROOT'].'/project1/config/database.php');

// Retrieve search query.
$SEARCH_QUERY = mysqli_real_escape_string($DB_CONNECTION, trim($_POST['query']));

$QUERY = "SELECT * FROM `students` WHERE `first_name` = '$SEARCH_QUERY' OR `last_name` = '$SEARCH_QUERY' OR `id` = '$SEARCH_QUERY' ORDER BY `first_name` ASC LIMIT 10";
$SEARCH_RESULTS = mysqli_query($DB_CONNECTION, $QUERY) or die(mysqli_error($DB_CONNECTION));

if (empty($SEARCH_QUERY)) {
	echo false;
}else{
if (mysqli_num_rows($SEARCH_RESULTS) > 0) {
foreach ($SEARCH_RESULTS as $key => $SEARCH_RESULT) {
	echo '<tr>';
		echo '<td>'.$SEARCH_RESULT['id'].'</td>';
		echo '<td>'.$SEARCH_RESULT['first_name'].'</td>';
		echo '<td>'.$SEARCH_RESULT['last_name'].'</td>';
		echo '<td>'.$SEARCH_RESULT['dob'].'</td>';
		echo '<td>'.$SEARCH_RESULT['program_level'].'</td>';
		echo '<td>
				<button class="btn btn-default btn-xs">Edit</button>
				<button class="btn btn-default btn-xs">Delete</button>
			</td>';
	echo '</tr>';
}
}else{
	echo '<tr>';
		echo '<td colspan="6">No search results. Please try again.</td>';
	echo '</tr>';
}
}

mysqli_close($DB_CONNECTION);
?>