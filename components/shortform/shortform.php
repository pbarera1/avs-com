<form action="" class="shortform<?= !empty($data->modifier) ? ' '.$data->modifier : ''; ?>">

	<?php foreach($data->form_fields as $form_field): ?>
	<div class="shortform__input-container">
		<input id="<?= $form_field->label ?>" type="text" class="shortform__input" required>
		<label for="<?= $form_field->label ?>" class="shortform__label">
			<?= $form_field->name ?>
		</label>
	</div>
	<?php endforeach; ?>

	<?php if ($data->text_area) : ?>
	<textarea rows="4" cols="1" class="shortform__text-area" placeholder="Anything you'd like to share with us!"></textarea>
	<?php endif; ?>

	<div
		<!--class="g-recaptcha"
		data-sitekey="6Ld_szkUAAAAAL3BT4YX_mfHj048kXgO7pDwsyHv"
		data-callback="OnSubmitForm"
		data-size="invisible"-->
	>
	</div>

	<submit class="shortform__submit">Get in Touch</submit>

</form>
