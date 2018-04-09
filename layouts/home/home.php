<div class="home">

	<div class="home__hero">

		<div class="home__hero-container">

			<h1 class="home__hero-title">
				Think outside of the box. Think AVS.
			</h1>

			<div class="home__hero-text">
				Correlating decision making data since 1991
			</div>

			<?php render('/components/btn/btn.php', [
				'text' => 'Discover How',
				'link' => '#contact-form'
			]); ?>

		</div>

	</div>

	<div class="home__usp">

		<h1 class="home__usp-title">
			Best of Both Worlds - Data Management
		</h1>

		<div class="home__usp-container">

			<div class="home__usp-half">

				<div class="home__usp-subheader">
					Integrate with your existing solutions extracting the best information from each.
				</div>

				<div class="home__usp-text">
					AVS solutions enable you to integrate data from many different sources through an in-memory process that enables full data exploration. We can ingest any data from any system at high speed and correlate information ﻿in﻿ real time. Our solutions are agnostic to data, agnostic to platform, and agnostic to format. As a result, we can integrate the most important information from all your existing solutions into a powerful daily use application that delivers critical decision-making insight in real time.
				</div>

			</div>

			<div class="home__usp-half">

				<div class="home__usp-subheader">
					Deliver powerful insight to anyone, anywhere
				</div>

				<div class="home__usp-text">
					Define your own business rules, develop and integrate your own models and algorithms, and present your results with your own corporate branding. Our technology allows you to create many views of your data to cater to the workflow of many different groups and departments; from mission critical operators to analysts to executives. And most importantly, you can deliver your results securely to any device, anywhere in the world; we support all deployments in every locale.
				</div>

			</div>

		</div>

		<?php render('/components/btn/btn.php', [
			'text' => 'Discover How',
			'link' => '#contact-form',
			'modifier' => 'btn--wide'
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

<!--Trusted by leading Fortune 500 Companies
Over 20 years experience in data visualization-->


	<div class="home__prototype">

		<h1 class="home__prototype-title">
			Turning Visualization Dreams into Reality
		</h1>

		<div class="home__prototype-subtitle">
			Design and Develop your own Workflow
		</div>

		<div class="home__prototype-text">
			AVS can help you develop a solution that best suits your end users and improves the efficiency of their day to day performance. Combining data from multiple data sources, reports, and from other parts of the organization can drastically help improve quality and efficiency of daily processes. Why spend 4 hours working on an Excel worksheet when you can spend that same time discussion solutions to problems.
			<br/><br/>
			We will work with you to better understand, organize, and present your data into a powerful easy to use application. We will help bring important decision making data to the surface so that you can easily support your decisions or insights. With a click of the button, output your results to be shared with others in your organization.
		</div>

		<?php
		render('/components/card/card.php', [
			'content' => '<img src="/img/prototype.png" alt=""><img src="/img/result.png" alt="">',
		]); ?>

	</div>

	<img src="/img/wave.svg" class="wave"/>

	<div class="home__products">

		<div class="home__products__container">

			<h1 class="home__engineers__title">
				OpenViz
			</h1>

			<div class="home__products__subtitle">
				A powerful data management and data visualization API
			</div>

			<div class="home__products__text">
				The OpenViz API consists of a flexible data management pipeline that feeds many millions of in-memory data points into a high performance rendering engine for scalable graphics generation. OpenViz allows software makers to create unique look-and-feel branding for any data visualization and seamlessly weave them into long lifecycle multi-product strategies using agile development.
			</div>

			<?php render('/components/btn/btn.php', [
				'text' => 'Discover How',
				'link' => '#contact-form'
			]); ?>

		</div>

		<div class="home__products__container">

			<h1 class="home__engineers__title">
				AVS/Express
			</h1>

			<div class="home__products__subtitle">
				Visually connect modules to rapidly discover insight into your data
			</div>

			<div class="home__products__text">
				AVS/Express is a comprehensive and versatile data visualization tool for both non-programmers and experienced developers. Parallel data processing for rapid data analysis, combined with rich visualization techniques and an intuitive graphical application development environment, allow for quick exploration of big data. A powerful  graphics engine has been designed to handle the most data intensive, interactive graphics applications using multipipe rendering and immersive virtual reality environments.
			</div>

			<?php render('/components/btn/btn.php', [
				'text' => 'Discover How',
				'link' => '#contact-form'
			]); ?>

		</div>
	</div>

	<div class="home__engineers">

		<div class="home__engineers__container">

			<h1 class="home__engineers__title">
				Engineering data insight since 1991
			</h1>

			<div class="home__engineers__subtitle">
				Experienced in Every Industry
			</div>

			<div class="home__engineers__text">
				AVS has invested over 20 years of research and development into how end users use data (and how software developers develop solutions) so that everyone can make the best possible decision in the least amount of time. Our Professional Services Team works to understands the needs of your end users, the data available to make decisions, and assists in constructing a solution that improves daily workflow and highlights decision making information.
			</div>

			<?php render('/components/btn/btn.php', [
				'text' => 'Discover How',
				'link' => '#contact-form'
			]); ?>

		</div>

	</div>

	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="/img/slider/openviz-1.png" alt="">
				<div>Slide 1</div>
			</div>
			<div class="swiper-slide">
				<img src="/img/slider/openviz-2.png" alt="">
				<div>Slide 2</div>
			</div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination"></div>
		<!-- Add Arrows -->
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>

	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="/img/slider/express-1.gif" alt="">
				<div>Slide 1</div>
			</div>
			<div class="swiper-slide">
				<img src="/img/slider/express-2.gif" alt="">
				<div>Slide 2</div>
			</div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination"></div>
		<!-- Add Arrows -->
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>

<!--slider css and js-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css" integrity="sha256-fUHMgGeFAqrzGB8vAPRlU3c/wNqTq5KQ8toq5kcg8fc=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js" integrity="sha256-jpZY8fZVCLdzzabx/y9dk2r4UjEMPKjwdsjxJWbhtCE=" crossorigin="anonymous"></script>

  <!-- Initialize Swiper -->
  <script>
	var swiper = new Swiper('.swiper-container', {
		pagination: {
			el: '.swiper-pagination',
			type: 'progressbar',
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
  </script>

	<?php
	// render('/components/shortform/shortform.php', [
	// 	'form_fields' => [
	// 		(object) [
	// 			'label' => 'name',
	// 			'name' => 'Name',
	// 		],
	// 		(object) [
	// 			'label' => 'email',
	// 			'name' => 'Email',
	// 		],
	// 	]
	// ]);
	?>

</div>
