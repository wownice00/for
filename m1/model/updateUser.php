<?php
	session_start();

	require('../view/header.php');
	require('../view/checkUser.php');

	$uid = $_SESSION['uid'];
	$uname = $pass = $name = $email = $gender = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname = test_input($_POST['uname']);
		$pass = password_hash(test_input($_POST['pass']), PASSWORD_DEFAULT);
		$name = test_input($_POST['name']);
		$email = test_input($_POST['email']);
		$gender = test_input($_POST['gender']);
	}

	$sql = "UPDATE USER SET USERNAME='".$uname."', PASSWORD = '".$pass."', FULL_NAME = '".$name."', EMAIL = '".$email."', GENDER = '".$gender."' WHERE USER_ID = ".$uid;

	$result = ExecuteSetQuery($sql);

	if($result == 1){
		header("Location: ../view/updSuccess.php");

	}
	else{
        header("Location: ../view/userEdit.php");

	}

?>
