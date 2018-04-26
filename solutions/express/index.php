<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include $root . '/functions.php';

render('/components/head/head.php');

render('/components/nav/nav.php', [
	items => [
		'Solutions' => '/solutions',
		'Support' => '/support',
		'Contact Us' => '/contact',
	],
]);

render('/layouts/express/express.php');

render('/components/shortform/shortform.php', [
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
	]
]);

render('/components/footer/footer.php');

render('/components/foot/foot.php');
