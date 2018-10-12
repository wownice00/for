<?php
	session_start();
	require('../view/header.php');

	$sql = "INSERT INTO TOPIC(TOPIC_NAME, TOPIC_DESCRIPTION, CAT_ID) VALUES('$_POST[topic_name]', '$_POST[topic_description]', $_POST[top_cat])";
	$res = ExecuteSetQuery($sql);

	if($res){
		header('Location: ../view/success_topic.php');
	}
	else{
		header('Location: ../view/newtopic.php');
	}

?>
