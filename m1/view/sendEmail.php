<?php
	require('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body align = "center">
	<div class="alert alert-success">
	<?php
		echo "<h1> A recovery email has been sent</h1> " ;
		echo "<a href='home.php'>Click Here</a> to log-in";
	?>
	</div>
</body>
</html>
<?php
  require('footer.php');
?>



<?php /*
<?php
	require('header.php');
    //require('..\PHPMailer\PHPMailerAutoload.php');
	//require('..\phpmailer\class.smtp.php');

	function randomPassword() {
	    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	    $pass = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < 8; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass); //turn the array into a string
	}

	$sql = "SELECT * FROM USER WHERE USERNAME = '$_POST[uname]'";
	$res = ExecuteGetQuery($sql);

	if(mysqli_num_rows($res) == 1){
        echo 'An email has successfully been sent to recover your account.';

    }
else{
    echo 'Sorry, there was an issue when trying to send the recovery email.';
}
/*
		$row = mysqli_fetch_array($res);
		$email = $row["EMAIL"];
		$pass = randomPassword();
		$subject = "Your Recovered Password";
		$msg = "Hello $row[FULL_NAME],<br><br>Please use this password to login: $pass";
		$pass = password_hash($pass, PASSWORD_DEFAULT);

		$mail = new PHPMailer;
		$mail->IsSMTP();
		// $mail->SMTPDebug  = 4;
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = 'tls';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->AddAddress($email);
		$mail->Username="youremail@gmail.com";
		$mail->Password="password";
		$mail->SetFrom('alecchap0@gmail.com','Password Reset');
		$mail->Subject = $subject;
		$mail->MsgHTML($msg);



		$str = "UPDATE USER SET PASSWORD = '$pass' WHERE USERNAME = '$_POST[uname]'";
		$result = ExecuteSetQuery($str);

		if($res && $mail->Send()){
			//echo "Success!!";
			header("location : success_mail.php");
		}
		else{
			//echo $mail->ErrorInfo;
			header("location : forgotpass.php?act=notsent");
		}
	}
	else{
		header("location : forgotpass.php?act=invalid");
	}*/
?>
