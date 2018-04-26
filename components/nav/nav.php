<nav class="nav">

	<div class="nav__container">

		<a href="/" class="nav__logo">
			<img src="/img/logo.png" alt="" class="nav__img">
			<span>AVS</span>
		</a>

		<ul class="nav__list">

			<?php foreach($data->items as $text => $link) : ?>
			<li class="nav__list-item">
				<a href="<?= $link; ?>" class="nav__link">
					<?= $text; ?>
				</a>
			</li>
			<?php endforeach; ?>

			<li class="nav__list-item">
				<?php if(strpos($_SERVER['REQUEST_URI'], 'forms') === false) {
					render('/components/btn/btn.php', [
						'text' => 'Request Demo',
						'link' => '/forms',
						'modifier' => 'btn--m-left',
					]);
				} ?>
			</li>

		</ul>

		<?php render('/components/hamburger/hamburger.php'); ?>

	</div>

</nav>
