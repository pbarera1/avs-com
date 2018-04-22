<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
 function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500);
</script>

<form class="shortform<?= !empty($data->modifier) ? ' '.$data->modifier : ''; ?>" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

	<input type=hidden name='captcha_settings' value='{"keyname":"test","fallback":"true","orgId":"00D300000005phA","ts":""}'>
	<input type=hidden name="oid" value="00D300000005phA">
	<input type=hidden name="retURL" value="http://avs.com/thank-you">
	<input type=hidden maxlength="255" name="00N50000002uRkI" size="20" type="text" value="document.referrer"/>
	<input type=hidden name="lead_source" value="Request-Demo-Page" />

	<!--  ----------------------------------------------------------------------  -->
	<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
	<!--  these lines if you wish to test in debug mode.                          -->
	<!--  <input type="hidden" name="debug" value=1>                              -->
	<!--  <input type="hidden" name="debugEmail" value="pbarera@avs.com">         -->
	<!--  ----------------------------------------------------------------------  -->


	<?php foreach($data->form_fields as $form_field): ?>
	<div class="shortform__input-container">
		<input
			id="<?= $form_field->label ?>"
			type="<?= $form_field->type ?>"
			class="shortform__input"
			name="<?= $form_field->name ?>"
			<?= $form_field->required === 'true' ? 'required' : ''; ?>
		>
		<label for="<?= $form_field->label ?>" class="shortform__label">
			<?= $form_field->label ?>
		</label>
	</div>
	<?php endforeach; ?>

	<?php if ($data->text_area) : ?>
	<textarea name="description" rows="4" cols="1" class="shortform__text-area" placeholder="Anything you'd like to share with us!"></textarea>
	<?php endif; ?>

	<div class="g-recaptcha" data-sitekey="6LdrxFQUAAAAAJjDKu-aXKgst1Qs72VXZugei6r-"></div>
	<input type="submit" class="shortform__submit" />

</form>

<!--<label for="first_name">First Name</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" /><br>

<label for="last_name">Last Name</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" /><br>

<label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" /><br>

<label for="phone">Phone</label><input  id="phone" maxlength="40" name="phone" size="20" type="text" /><br>

<label for="description">Description</label><textarea name="description"></textarea><br>

Referring URL:<input  id="00N50000002uRkI" maxlength="255" name="00N50000002uRkI" size="20" type="text" /><br>

<label for="lead_source">Lead Source</label><select  id="lead_source" name="lead_source"><option value="">--None--</option><option value="Existing Account">Existing Account</option>-->

