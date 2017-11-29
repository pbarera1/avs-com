<div class="contact">

	<div class="contact__form">

	<?php render('/components/shortform/shortform.php', [
		'modifier' => 'shortform--contact-page',
		'text_area' => true,
		'form_fields' => [
			(object) [
				'label' => 'name',
				'name' => 'Name',
			],
			(object) [
				'label' => 'email',
				'name' => 'Email',
			],
			(object) [
				'label' => 'phone',
				'name' => 'Phone',
			],
			(object) [
				'label' => 'message',
				'name' => 'Message',
			],
		]
	]); ?>

	</div>

</div>
