<?php
    include"database.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title></title> 
</head>
<body>
    <?php
	$DateSubmittedtotheUSSC = $_POST['DateSubmittedtotheUSSC'];
	$CUNYFirstID = $_POST['CUNYFirstID'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$MailingAddress = $_POST['MailingAddress'];
	$email = $_POST['email'];
	$home_phone_number = $_POST['home_phone_number'];
	$phone_number = $_POST['phone_number'];

	if(empty($CUNYFirstID) || empty($fname) ||empty($lname) ||empty($CUNYFirstID) ||empty($MailingAddress) || empty($phone_number)){
		echo "Fill out the form";
		exit();
	}

	// $sql = "INSERT INTO form (USER_ID,FORM,DATE,F_NAME,M_NAME,L_NAME,MailingAddress,H_PHONE,C_PHONE,Status_id) 
	//VALUE('$CUNYFirstID',0,'$DateSubmittedtotheUSSC','$fname','$mname','$lname','$MailingAddress','$home_phone_number','$home_phone_number',1);";
	$sql = "INSERT INTO form(USER_ID, SUBMIT_DATE, F_NAME, M_NAME, L_NAME, ADD1, ADD2, H_PHONE, C_PHONE, S_GPA, C_GPA, S_CREDITS_ATTEMPTED, S_CREDITS_COMPLETED, COMMENTS, TERM, SSION, STANDING, Lmt, APPT, INDICATOR, STATUS, REVIEW_DATE, FAC_EMAIL) VALUE('$CUNYFirstID','$DateSubmittedtotheUSSC','$fname','$mname','$lname','$MailingAddress','$email','$home_phone_number','$home_phone_number',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);";
	
	$mysqli->query($sql);
	echo 'form submmited for ' . $fname . $lname . "<br>";
    ?>
</body>
</html>