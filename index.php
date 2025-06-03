<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>

		form>input {
		    margin-bottom: 10px;
		    font-size: 20px;
		    padding: 5px;
		}

		button {
		    background: none;
		    border: none;
		    border: 1px solid black;
		    padding: 10px 40px;
		    font-size: 20px;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	<?php include("header.php"); ?>
	
	<div class="login">

		<form class="form-signin" action="loginLogic.php" method="post">
		
			<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

			<label for="inputEmail" class="sr-only">Username</label>
			<input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>

			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>


			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
			
			<small>Don't have account ? <a href="signup.php">Sign Up</a></small>

			<p class="mt-5 mb-3 text-muted">Digital School  &copy; 2023</p>
		</form>

	</div>

<?php include("footer.php"); ?>


</body>
</html>