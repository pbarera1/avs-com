<div class="home">

	<div class="home__hero" data-plugin="defer-hero" data-src="/img/hero.jpg">

		<div class="home__hero-container">

			<h1 class="home__hero-title">
				Think outside the box. Think AVS.
			</h1>

			<div class="home__hero-text">
				Correlating decision making data since 1991
			</div>

			<?php render('/components/btn/btn.php', [
				'text' => 'Discover How',
				'link' => '/offerings'
			]); ?>

		</div>

	</div>

	<div class="home__usp">

		<h2 class="home__usp-title">
			Best of Both Worlds
		</h2>

		<div class="home__usp-container">

			<i class="material-icons">
				autorenew
			</i>

			<div class="home__usp-half">

				<div class="home__usp-subheader">
					Data Management
				</div>

				<p class="home__usp-text">
					<strong>
						Integrate with your existing solutions extracting the best information from each.
					</strong>

					AVS solutions enable you to integrate data from many different sources through an in-memory process that enables full data exploration. We can ingest any data from any system at high speed and correlate information ﻿in﻿ real time.
					<br/><br/>
					Our solutions are agnostic to data, agnostic to platform, and agnostic to format. As a result, we can integrate the most important information from all your existing solutions into a powerful daily use application that delivers critical decision-making insight in real time.
				</p>

			</div>

			<div class="home__usp-half">

				<div class="home__usp-subheader">
					Data Presentation
				</div>

				<p class="home__usp-text">
					<strong>
						Deliver powerful insight to anyone, anywhere.
					</strong>
					Define your own business rules, develop and integrate your own models and algorithms, and present your results with your own corporate branding.
					<br/><br/>
					Our technology allows you to create many views of your data to cater to the workflow of many different groups and departments; from mission critical operators to analysts to executives. And most importantly, you can deliver your results securely to any device, anywhere in the world; we support all deployments in every locale.
				</p>

			</div>

		</div>

		<?php render('/components/btn/btn.php', [
			'text' => 'Learn More',
			'link' => '/forms',
			'modifier' => 'btn--wide btn--no-m-mobile'
		]); ?>

	</div>

	<div class="home__about-us">

		<img class="home__about-us__img" src="/img/avs-logos-1.png" alt="">

		<div class="home__about-us__container">

			<h1 class="home__about-us__title">
				One Stop Shop
			</h1>

			<div class="home__about-us__subtitle">
				Talented Data Engineers improving Daily Business Decisions
			</div>

			<div class="home__about-us__text">
				We drive business results across industries using end-to-end approach to data visualization. Our solutions strategically integrate into existing systems by stretching the boundaries of data size, processing speed, rendering quality & scalability. A combination of our data engineering design and our data management & data visualization products, allow you to answer tough questions for both sophisticated and everyday users.
			</div>

		</div>

	</div>

	<div class="home__prototype">

		<h1 class="home__prototype-title">
			Turning Visualization Dreams into Reality
		</h1>

		<div class="home__prototype-subtitle">
			Design and Develop your own Workflow
		</div>

		<div class="home__prototype-text">

			<?php
				render('/components/card/card.php', [
				'content' => '<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/img/prototype.png" alt="" data-plugin="defer-img-load"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/img/result.png" alt="" data-plugin="defer-img-load">',
			]); ?>

			<p>
				AVS can help you develop a solution that best suits your end users and improves the efficiency of their day to day performance. Combining data from multiple data sources, reports, and from other parts of the organization can drastically help improve quality and efficiency of daily processes. Why spend 4 hours working on an Excel worksheet when you can spend that same time discussion solutions to problems.
			</p>

			<p>
				We will work with you to better understand, organize, and present your data into a powerful easy to use application. We will help bring important decision making data to the surface so that you can easily support your decisions or insights. With a click of the button, output your results to be shared with others in your organization.
			</p>

		</div>

	</div>

	<?php render('/components/shortform/shortform.php', [
		'form_fields' => [
			(object) [
				'label' => 'Name',
				'name' => 'first_name',
				'type' => 'text',
				'required' => 'true',
			],
			(object) [
				'label' => 'Email',
				'name' => 'email',
				'type' => 'email',
				'required' => 'true',
			],
		]
	]); ?>

</div>
