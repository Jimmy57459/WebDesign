<?php
include("database.php");
$q = isset($_GET["q"]) ? intval($_GET["q"]) : '';

$sql="DELETE FROM usersDB WHERE userID = '".$q."';";
$fsql="DELETE FROM FORM WHERE USER_ID = '".$q."';";
//"SELECT userID, userFname, userLname, Pword, userEmail, userType 
  //  FROM usersDB;";
$result=$mysqli->query($sql);
$result=$mysqli->query($fsql);
echo "deleted";

$mysqli->close();
?>