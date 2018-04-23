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

		</ul>

		<?php if(strpos($_SERVER['REQUEST_URI'], 'engage') === false) {
			render('/components/btn/btn.php', [
				'text' => 'Request Demo',
				'link' => '/engage',
				'modifier' => 'show-md btn--m-left',
			]);
		} ?>

		<?php render('/components/hamburger/hamburger.php'); ?>

	</div>

</nav>
