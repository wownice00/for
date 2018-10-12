<?php
	session_start();
	require('../view/header.php');


	$sql = "INSERT INTO QUESTION(HEADING, QUESTION_DETAIL, USER_ID, TOPIC_ID) VALUES('$_POST[heading]', '$_POST[detail]', $_SESSION[uid], '$_POST[topid]')";
	$res = ExecuteSetQuery($sql);

	if($res){
		header("Location: ../view/success_ques.php?topid=$_POST[topid]");
	}
	else{
		header("Location: ../view/newquestion.php?topid=$_POST[topid]");
	}

?>

