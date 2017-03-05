<?php
$page = 'register';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
//begin register parser
require('register-parser.php');
?>
<main id="content">
	<section id="<?php echo $page; ?>">
		<h1>Create an Account</h1>
		<?php show_feedback( $feedback, $errors ); ?>
		<form class="form-register" action="register.php" method="post">
			<label for="the_username">Choose a Username</label>
			<input type="text" name="username" id="the_username">
			<span class="hint">Between 5 - 50 characters</span>
			<label for="the_email">Your Email Address</label>
			<input type="email" name="email" id="the_email">
			<label for="the_password">Choose a Password</label>
			<input type="password" name="password" id="the_password">
			<span class="hint">At least 8 characters long</span>
			<label>
				<input type="checkbox" name="policy" value="1">
				I agree to the
				<a href="#" target="_blank">terms of service</a> and <a href="#" target="_blank">privacy policy</a>
			</label>
			<input type="submit" value="Sign Up">
			<input type="hidden" name="did_register" value="1">
		</form>
		<span>Already have an account? <a href="login.php">Log in</a>.</span>
	</section>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
