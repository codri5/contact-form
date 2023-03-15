<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DATABASE', 'contact_form');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

// Check for connection error
if($conn->connect_error) {
    die(`Connection failed $conn->connect_error`);
}

?>