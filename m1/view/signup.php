<?php
	session_start();
	require('header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="js.js" ></script>
	<style>
		.error {color: #FF0000}
	</style>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>
<body align="center">

	<h2>User Sign-up Form</h2>
	<p><span class = "error">All fields are compulsory.</span></p>
	<form method="post" class="form-inline" action="../model/addUser.php" >
		<div class="form-group">
			Username: <input type="text"  id="uname" name="uname" class="form-control">
            <aside id="uname_error" title="Please enter a username">
            </aside>
		</div>
		</br></br>
		<div class="form-group">
			Password: <input type="password" id="pass" name="pass" class="form-control">
            <aside id="pass_error" title="Please enter a password"></aside>
		</div>
		</br></br>
		<div class="form-group">
			Name: <input type="text" id="name" name="name" class="form-control">
            <aside id="name_error" title="Please enter a name"></aside>
		</div>
		</br></br>
		<div class="form-group">
			Email: <input type="email" id="email" name="email" class="form-control">
            <aside id="email_error" title="Please enter an email"></aside>
		</div>
		</br></br>
		<div class="radio" id="radio">
			Gender:
			<input type="radio" id="male" name="gender" value="female">Female
			<input type="radio" id="female" name="gender" value="male">Male
		</div>
		</br></br>
		<input type="submit" name="submit" value="Submit" class="btn btn-primary" onclick="regi()">
		<input type="reset" name="reset" value="Reset" class="btn btn-primary">
		<br><br>
		<?php
			if(isset($_GET["act"]))
				if($_GET["act"] == "invalid"){
					echo '<div class="alert alert-danger" align="center">';
					echo "Username already exists. Please try again.";
					echo "</div>";
				}
		 ?>
	</form>
 <div class="alert alert-danger" align="center" id="regierror" style="display: none;">
         <h3 style="color: red; text-align: center;">Please complete all fields</h3>
        </div>
</body>
</html>
<?php
  require('footer.php');
?>
