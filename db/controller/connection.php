<?php
//defining the server, username, password and database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u787607796_deluxechains');
define('DB_PASSWORD', 'Deluxe1234');
define('DB_DATABASE', 'u787607796_deluxechains');
//Create the connection to the database
$connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// if ($connect->connect_error) {
// 	die("Connection failed: ". $connect->connect_error  );
// } else {
// 	echo "Access successful!";
// }

?>