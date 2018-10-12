<?php
	session_start();
	require('../view/header.php');

	$sql = "DELETE FROM QUESTION WHERE QUESTION_ID=$_GET[qid] AND USER_ID=$_SESSION[uid]";
	$res = ExecuteSetQuery($sql);

	header("Location: ". $_SERVER['HTTP_REFERER']);
?>
