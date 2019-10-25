<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="form-modal"></div>
	<div class="form-container">
		<button class='form-close'>CLOSE</button>
		<div class="head-container">
			<img alt="company logo" class="form-main-logo" src="images/menu-icons/logo-menu.svg" width="45">
			<h1>Do not miss your chance</h1>
			<p>For this limited time offer to work with an competetive website design agency. Act now and save big on a new website before it’s too late!</p>
		</div>
        <iframe name="formDestination" class="formDestination"></iframe>
		<form action="php/db.php" method="post" target="formDestination">
			<select name="package">
				<option disabled selected value="Disabled">
					Select your package
				</option>
				<option value="Basic">
					Basic
				</option>
				<option value="Advanced">
					Advanced
				</option>
				<option value="Premium">
					Premium
				</option>
			</select> Your Name: <input name="name" required="" type="text"> Your Surname: <input name="surname" required="" type="text"> Your Email: <input name="email" required="" type="email"> Your Phone: <input name="phone" required="" type="text">
			<h3>Additional services (if any)</h3>
			<div class="additional-services">
				<div>
					<legend><input name="servicesone" type="checkbox" value="Monthly support"> Monthly support <input name="services" type="hidden" value=""></legend>
                    <legend><input name="servicestwo" type="checkbox" value="Other Theme"> Other Theme <input name="services" type="hidden" value=""></legend>
				</div>
				<div>
					<legend><input name="servicesthree" type="checkbox" value="Custom Theme"> Custom Theme <input name="services" type="hidden" value=""></legend>
                    <legend><input name="servicesfour" type="checkbox" value="Mailing List Setup"> Mailing List Setup <input name="services" type="hidden" value=""></legend>
				</div>
				<div>
					<legend><input name="servicesfive" type="checkbox" value="Photo Gallery"> Photo Gallery <input name="services" type="hidden" value=""></legend>
                    <legend><input name="servicessix" type="checkbox" value="Contact Forms"> Contact Forms <input name="services" type="hidden" value=""></legend>
				</div>
			</div>
			<textarea cols="10" name="message" placeholder="Tell us more about your website" rows="5"></textarea>
			<div class="button-container">
				<input class="btn-start" name="submit" type="submit" value="Let's start!">
			</div>
		</form>
	</div>
    <?php include('php/db.php');?>
</body>
</html>