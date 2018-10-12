<?php
	require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="js.js" ></script>
	<style>
		.error {color: #FF0000}
	</style>
</head>
<body>
	<form method="post" action="../model/login.php">
		<div class="form-group" align="center">
		Username: <input type="text" id="uname" name="uname" class="form-group"><br>
            <aside id="uname_error" title="Please enter a username"></aside>
		</div>
		<div class="form-group" align="center">
		Password: <input type="password" id="pwd" name="pwd" class="form-group"><br>
            <aside id="pwd_error" title="Please enter a password"></aside>
		</div>
		<div align="center">
		<input type="submit" value="Login" class="btn btn-primary" onclick="login()">
		<a href="signup.php"><input type="button" value="Sign Up" class="btn btn-primary"></a>
		</div>
		<br><br>
		<?php
			if(isset($_GET["act"]))
				if($_GET["act"] == "invalid"){
					echo '<div class="alert alert-danger" align="center">';
					echo "Invalid Username or Password. <a href='forgotpass.php'>Forgot Password?</a>";
					echo "</div>";
				}
		 ?>
	</form>
    <div class="alert alert-danger" align="center" id="loginerror" style="display: none;">
         <h3 style="color: red; text-align: center;">Please complete all fields</h3>
        </div>
</body>
</html>
<?php
require('footer.php');
?>
