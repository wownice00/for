<?php
	require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="js.js" ></script>
</head>
<body>
	<form method="post" action="sendEmail.php"  align="center" onclick="forgot()">
		<br><br>
		<div class="form-group">
		Username: <input type="text" id="forg" name="uname" class="form-group"><br>
		</div>
		<input type="submit" value="Send Email" class="btn btn-primary">
		<br><br>
		<?php
			if(isset($_GET["act"]))
				if($_GET["act"] == "invalid"){
					echo '<div class="alert alert-danger" align="center">';
					echo "Username doesnot exist.";
					echo "</div>";
				}
				else if($_GET["act"] == "notsent"){
					echo '<div class="alert alert-danger" align="center">';
					echo "Unable to send email. Please try again.";
					echo "</div>";
				}
		 ?>
	</form>
    <div class="alert alert-danger" align="center" id="forgerror" style="display: none;">
         <h3 style="color: red; text-align: center;">Please enter a username</h3>
        </div>
</body>
</html>
<?php
require('footer.php');
?>
