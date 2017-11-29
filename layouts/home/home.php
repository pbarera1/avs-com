<div class="home">

	<div class="home__hero">

		<div class="home__hero-container">

		<?php render('/components/rotate-text/rotate-text.php'); ?>

			<div class="home__hero-text">
				AVS is distinguished from a crowded market of data visualization software vendors by virtue of its “data first” approach and ability to render highly customized and user-friendly graphics from big data, extreme sources and sophisticated scenarios.
				<br/><br/>
				Our comprehensive range of solution offerings and long history of product innovation and industry leadership help to separate us from competitors.
			</div>
		</div>

	</div>

	<div>
		<h1>Why Us?</h1>
		<ul>
			<li>
				<div class="usp__title">
					Solutions, not just tools
				</div>
				AVS does not offer you tools with limited charting abilities. We integrate our API to design for you an efficient deployable system that caters to your problems. We build solutions for you.
			</li>
			<li>
				<div class="usp__title">
					Customized for you
				</div>
				We build our solutions around your data flow systems and existing setups. We do not provide you the next best off-the-shelf-graph-and-chart product.
In fact, we are as bespoke as it can get.
			</li>
			<li>
				<div class="usp__title">
					Iterate on the go
				</div>
				AVS, with its tools, fits in perfectly into an Agile business environment. You do not get a restricted product but an iterative and interactive solution that works on the fly.
			</li>
			<li>
				<div class="usp__title">
					Professional Services
				</div>
				Our assistance goes ahead of deployment and development. We provide you all the essential consultancy and integrate our products and services with your current systems.
			</li>
		</ul>
	</div>

	<div class="customers">
		<h1 class="customers__title">Trusted by leading Fortune 500 Companies</h1>
		<div>Over 20 years experience in data visualization</div>
		<div class="customers__container">
			<img src="/img/customers-1.png" alt="" class="customers__img">
			<img src="/img/customers-2.png" alt="" class="customers__img">
			<img src="/img/customers-3.png" alt="" class="customers__img">
		</div>
	</div>

	<h1 class="home__prototype-title">Turning Visualization Dreams into Reality</h1>

	<div class="home__prototype">

		<?php
		render('/components/card/card.php', [
			'content' => '<img src="/img/prototype.png" alt="">',
		]); ?>

		<p class="home__prototype-text">AVS takes complex prototypes and turns then into decision making solutions that unleash the power of your data via interactive insights.</p>

		<p class="home__prototype-text">AVS takes complex prototypes and turns then into decision making solutions that unleash the power of your data via interactive insights.</p>

		<?php
		render('/components/card/card.php', [
			'content' => '<img src="/img/result.png" alt="">',
		]); ?>

	</div>

</div>
