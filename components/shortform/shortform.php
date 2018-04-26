<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
 function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500);
</script>

<form class="shortform<?= !empty($data->modifier) ? ' '.$data->modifier : ''; ?>" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
<!--  these lines if you wish to test in debug mode.                          -->
	<input type="hidden" name="debug" value=1>
	<input type="hidden" name="debugEmail" value="pbarera@avs.com">
<!--  ----------------------------------------------------------------------  -->

	<input type=hidden name='captcha_settings' value='{"keyname":"test","fallback":"true","orgId":"00D300000005phA","ts":""}'>
	<input type=hidden name="oid" value="00D300000005phA">
	<input type=hidden name="retURL" value="http://avs.com/thank-you">
	<input id="referrer" type=hidden maxlength="255" name="00N50000002uRkI" size="20" type="text" value=""/>
	<input type=hidden name="lead_source" value="Request-Demo-Page" />
	<input id="last_name" type=hidden name="last_name" value="" />
	<script type='text/javascript'>
		document.getElementById('referrer').value = window.location.href;
	</script>

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

	<div class="g-recaptcha" data-sitekey="6LdrxFQUAAAAAJjDKu-aXKgst1Qs72VXZugei6r-"></div>
	<input type="submit" class="shortform__submit shortform__submit--m" />

</form>

<script type='text/javascript'>
	let form = document.querySelector('.shortform');
	form.addEventListener('submit', function(e){
		e.preventDefault;
		let name = document.querySelector('#Name');
		let lastName = document.querySelector('#last_name');
		nameText = name.value.split(' ');
		name.value =  nameText[0];
		lastName.value = nameText.slice(0, -1).join('');
	});
</script>
