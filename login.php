<?php
$page = 'login';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//begin login parser
require('login-parser.php');
//get the doctype and the header element
include_once('header.php');
?>
<main id="content">
	<h1>Log In to Your Account</h1>
	<?php show_feedback( $feedback, $errors ); ?>
	<div id=login class="form-login-wrap">
		<form method="post" class="form-login" action="login.php">
			<label for="the_username">Username</label>
			<input type="text" name="username" id="the_username">
			<label for="the_password">Password</label>
			<input type="password" name="password" id="the_password">
			<input type="submit" value="Log In">
			<input type="hidden" name="did_login" value="true">
		</form>
	</div>
	<a href="register.php">Need an account? Sign up here.</a>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
