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

render('/layouts/solutions/solutions.php');

render('/components/shortform/shortform.php');

render('/components/footer/footer.php');

render('/components/foot/foot.php');
