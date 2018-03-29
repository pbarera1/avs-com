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

render('/layouts/home/home.php');

render('/components/footer/footer.php');

render('/components/foot/foot.php');


//raleway or oswald + lato
