<?php
	require('header.php');
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<form method="post" action="sendEmail.php">
		<div class="form-group" align="center">
		Username: <input type="text" name="uname" class="form-group" required ="required"><br>
		</div>
		<input type="submit" value="Login" class="btn btn-primary">
		<br><br>
		<?php
			if(isset($_GET["act"]))
				if($_GET["act"] == "invalid"){
					echo '<div class="alert alert-danger" align="center">';
					echo "Username doesnot exist.";
					echo "</div>";
				}
		 ?>
	</form>
</body>
</html>
<?php
require('footer.php');
?>
