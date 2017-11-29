<?php
// avoid local errors
if (! ini_get('date.timezone')) {
	date_default_timezone_set('America/Los_Angeles');
}
?>
<footer class="footer">

	<div class="footer__container">

		<img src="/img/logo.png" alt="" class="footer__logo">

		<div class="footer__text">

			<div class="footer__tagline">
				Over 20 Years of Innovation in Data Visualization
			</div>

			<div class="footer__disclaimer">
				Advanced Visual Systems &copy; <?= date('Y'); ?>
			</div>

		</div>

		<div class="footer__nav">
			<ul class="footer__list">

				<?php
				$footer_links = [
					'Solutions' => '/solutions',
					'OpenViz' => '/openviz',
					'Support' => '/support',
					'About' => '/about',
					'Contact' => '/contact',
				];
				foreach ($footer_links as $text => $link) : ?>
				<li class="footer__list-item">
					<a class="footer__link" href="<?= $link ?>">
						<?= $text ?>
					</a>
				</li>
				<?php endforeach; ?>

			</ul>
		</div>

	</div>

</footer>
