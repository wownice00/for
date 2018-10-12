<?php
	session_start();
	require('../view/header.php');
	require('../view/checkUser.php');

	$sql = "UPDATE ANSWER SET ANS_DETAIL='$_POST[ansdetail]' WHERE ANS_ID=$_POST[ansid] AND USER_ID=$_SESSION[uid]";
	$res = ExecuteSetQuery($sql);

	if($res){
		header("Location: ../view/success_ans.php");
	}
	else{
		header("Location: ../view/ans.php");
	}
?>
