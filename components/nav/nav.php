<nav class="nav">

	<div class="nav__container">

		<a href="/" class="nav__logo">
			<img src="http://www.avs.com/wp-content/uploads/2013/02/avslogoc.png" alt="" width="150">
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

		<?php render('/components/btn/btn.php', [
			'text' => 'Contact Us',
			'link' => '/contact',
			'modifier' => 'show-md btn--m-left',
		]); ?>

		<?php render('/components/hamburger/hamburger.php'); ?>

	</div>

</nav>
<!--<div class="nav__holder"></div>-->
