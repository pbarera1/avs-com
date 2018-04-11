<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include $root . '/functions.php';

render('/components/head/head.php');

render('/components/nav/nav.php', [
	items => [
		'Solutions' => '/solutions',
		'Support' => '/support',
		'Contact Us' => '/contact-us',
	],
]);

//more

render('/components/shortform/shortform.php');

render('/components/footer/footer.php');

render('/components/foot/foot.php');
