<?php
// Database configuration constants
define('DB_HOST', 'sql.freedb.tech'); // Hostname of the MySQL server
define('DB_USERNAME', 'freedb_chuyoriko'); // MySQL username
define('DB_PASSWORD', 'J6WxCbeT%nB6y7A'); // MySQL password
define('DB_NAME', 'freedb_flazutest'); // Database name

// Attempt to establish a connection to the database
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}