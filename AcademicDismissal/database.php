<?php
$host = "mars.cs.qc.cuny.edu";

// get contents of a file into a string
//$filename = "/pathto/secret.txt";
//$handle = fopen($filename, "r");
//$contents = fread($handle, filesize($filename));
//$details = explode('|', $contents);


// PUT YOUR USERNAME AND PASSWORD FOR TESTING 
$user ="lipe4387";   //your mysql username
$password= "23614387";  //your mysql password
$db = "lipe4387";  //schema 


//$user = trim($details[0]);
//$password = trim($details[1]);
//$db = trim($details[0]);
//fclose($handle);


// To use the mysqli extension, first create an instance of the mysqli class
// The second this instance is created, mysqli is going to attempt to connect to this db using these credentials
$mysqli = new mysqli($host, $user, $password, $db);
if( $mysqli->connect_error) {
	// There was an error, so let's display the actual error message
	echo $mysqli->connect_error;
	// exit() terminates the php program. No subsequent code runs
	exit();
}
$mysqli->set_charset('utf8');

?>