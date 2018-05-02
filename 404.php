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
]); ?>

<div class="thank-you" style="margin: 170px 20px 60px; text-align: center;">

	<h1 style="color: #333;">Sorry, looks like that page has moved.</h1>

	<div style="color: #333;">
		Please try reutrning to the homepage.
	</div>

	<?php render('/components/btn/btn.php', [
		'text' => 'Back to Home',
		'link' => '/',
		'modifier' => 'btn--wide'
	]); ?>

</div>

<?php render('/components/footer/footer.php');

render('/components/foot/foot.php');
