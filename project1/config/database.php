<?php
 /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    */
    $DB_HOST = 'localhost'; // MySQL server host name or ip address. 
    $DB_USERNAME = 'root'; // MySQL server username.
    $DB_PASSWORD = 'kiefer@6'; // MySQL server password.
    $DB_DATABASE = 'project1'; // MySQL server database. 

    // Connection to the database.
    $DB_CONNECTION = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE) or die('Error connecting to MySQL server.');
?>