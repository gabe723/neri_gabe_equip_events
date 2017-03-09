<?php
require('db-config.php');
$page = 'user-order';
$product_id = $_GET['product_id'];
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
//if action is add, figure out which product is being added, add it to list
if ( $_GET['action'] == "add" ) {
	$user_id = USER_ID;
	$query = "SELECT list_id
	FROM lists
	WHERE user_id = $user_id
	AND status = 1
	ORDER BY date DESC
	LIMIT 1";
	$result = $db->query( $query );
	if ( $result->num_rows == 1 ) {
		//a list exists, so add item
		$row = $result->fetch_assoc();
		$list_id = $row['list_id'];
	}else{
		//no lists exists, create a list
		$query = "INSERT INTO lists
		( user_id, status, date )
		VALUES
		( $user_id, 1, now() )";
		$result = $db->query( $query );
		if ( $db->affected_rows == 1 ) {
			$list_id = $db->insert_id;
		}
	}
	if ( isset( $list_id ) ) {
		$query = "INSERT INTO list_products
		( list_id, product_id, date )
		VALUES
		( $list_id, $product_id, now() )";
		$result = $db->query( $query );
		if ( $db->affected_rows == 1 ) {
			$feedback = 'Item was successfully added.';
		}
	}
}//end add parser
$query = "SELECT *
FROM products, lists, list_products
WHERE products.product_id = list_products.product_id
AND list_products.list_id = lists.list_id";
$result = $db->query( $query );
//get only the list of the current logged in user
?>
</div>
<main id="content">
	<section id="user_order">
		<div class="equipment-list">
			<h2>my equipment list</h2>
			<?php show_feedback( $feedback ); ?>
		</div>
		<h2>quote form</h2>

		<form name="contactForm" id="contactForm" method="post" action="proccessor.php"> <!-- get is unsecure, post means data will go to file, action is path to proccessor -->
			<fieldset><legend>Please Fill out the fields below and submit your quote.</legend>
				<label for="fname">First Name:</label>
				<!-- input id must match "for" value -->
				<input type="text" name="fname" id="fname" size="30" maxlength="50" class="inputsize" placeholder="First Name" autofocus required />
				<input type="hidden" name="subject" id="subject" value="Subject of Form" />
				<label for="lname">Last Name:</label>
				<input type="text" name="lname" id="lname" size="30" maxlength="50" class="inputsize" placeholder="Last Name" autofocus required />
				<label for="phone">Phone Number:</label>
				<input type="tel" name="phone" id="phone" size="12" maxlength="12" class="inputsize" placeholder="555-555-5555" autofocus required />
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" size="30" maxlength="150" class="inputsize" placeholder="john.smith@email.com" autofocus required />
				<label for="state">State:</label>
				<select name="state" id="state" class="inputsize">
					<option value="" selected="selected">Choose a State</option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
				</select>
				What can we help you with?
				<label for="cotype_sq"><input type="radio" name="cotype" id="cotype_sq" value="Submit a Quote">Submit a Quote</label>
				<label for="cotype_ep"><input type="radio" name="cotype" id="cotype_ep" value="Event Planning">Event Planning</label>
				<label for="cotype_ef"><input type="radio" name="cotype" id="cotype_ef" value="Event Financing">Event Financing</label>
				<label for="cotype_am"><input type="radio" name="cotype" id="cotype_am" value="Account Management">Account Management</label>
				<label for="cotype_qc"><input type="radio" name="cotype" id="cotype_qc" value="Questions/Concerns">Questions/Concerns</label>
				<label for="cotype_cch"><input type="radio" name="cotype" id="cotype_cch" value="Club Card Holders">Club Card Holders</label>
				<label for="addtolist"><input type="checkbox" name="addtolist" id="addtolist" value="yes" checked="checked" />Please add me to the mailing list</label>
				<label for="comments">Comments:</label>
				<textarea rows="6" cols="30" name="comments" id="comments" class="inputsize"></textarea>
				<input type="submit" name="submit" id="quote_submit" value="Get Quote">
				<input type="hidden" name="did_submit" value="1">
			</fieldset>
		</form>
	</section>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
