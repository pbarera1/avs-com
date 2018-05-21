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
]); ?>

<div class="thank-you" style="margin: 170px 20px 60px; text-align: center;">

	<h1 style="color: #333;">Thank You! Your inquiry has been recieved.</h1>

	<div style="color: #333;">
		An AVS representative you contact you shortly
	</div>

	<?php render('/components/btn/btn.php', [
		'text' => 'Back to Home',
		'link' => '/',
		'modifier' => 'btn--wide'
	]); ?>

</div>

<?php render('/components/footer/footer.php');

render('/components/foot/foot.php');
