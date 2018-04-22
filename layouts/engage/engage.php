<div class="engage">

	<div class="engage__form">

		<h2>
			Schedule a free call with our team to discuss any questions you have!
		</h2>

		<?php render('/components/longform/longform.php', [
			'modifier' => 'shortform--engage-page',
			'text_area' => true,
			'form_fields' => [
				(object) [
					'label' => 'Name',
					'name' => 'first_name',
					'type' => 'text',
					'required' => 'true',
				],
				(object) [
					'label' => 'Email',
					'name' => 'email',
					'type' => 'email',
					'required' => 'true',
				],
				(object) [
					'label' => 'Phone',
					'name' => 'phone',
					'type' => 'text',
				],
			]
		]); ?>

		<img src="/img/customer-logos.png" alt="" class="engage__image">

		<div class="engage__clients">
			Providing Trusted Solutions to Fortune 500 Companies
		</div>

	</div>

</div>
