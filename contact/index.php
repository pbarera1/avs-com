<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include $root . '/functions.php';

render('/components/head/head.php');

render('/components/nav/nav.php', [
	items => [
		'Offerings' => '/offerings',
		'Support' => '/support',
		'Contact Us' => '/contact',
	],
]);

render('/layouts/contact/contact.php');

render('/components/footer/footer.php');

render('/components/foot/foot.php');
