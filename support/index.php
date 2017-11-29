<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include $root . '/functions.php';

render('/components/head/head.php');

render('/components/nav/nav.php', [
	items => [
		'Solutions' => '/solutions',
		'OpenViz' => '/openviz',
		'Support' => '/support',
		'About' => '/about',
	],
]);

//more

render('/components/footer/footer.php');

render('/components/foot/foot.php');
