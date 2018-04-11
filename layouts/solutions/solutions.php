<div class="product">

	<div class="product__container">
		<div class="product__desc">
			<div class="product__text">
				<div class="product__title">
					OpenViz
				</div>
				OpenViz is a multifunction API that serves as a rich canvas for the development of intelligent and interactive data visualizations that have an intimate relationship with both the underlying data and the end user.
				<br/><br/>
				OpenViz is a collection of data visualization, data analysis and data management techniques that can be integrated into any software solution, enabling any type and quantity of data to be expressed as highly interactive 2D and 3D presentations that can be easily distributed via the Web and added to new or existing applications.
			</div>
		</div>
		<img src="/img/openviz-trans-3.png" alt="" class="product__img">
	</div>

	<div class="product__container">
		<div class="product__desc">
			<div class="product__text">
				<div class="product__title">
					AVS Express
				</div>
AVS/Express is a comprehensive and versatile data visualization tool for both non-programmers and experienced developers. Rapid data analysis and rich visualization techniques combined with an intuitive, graphical application development environment make AVS/Express the best choice for any data visualization task.
			</div>
			<img src="/img/product-openviz-2.png" alt="" class="product__img">
		</div>
	</div>

	<div class="product__container">
		<div class="product__desc">
			<div class="product__text">
				<div class="product__title">
					Toolmaster
				</div>
Toolmaster is the most comprehensive toolset available for visual data analysis and presentation under X Windows and an excellent foundation for adding graphics to Windows applications.
			</div>
		</div>
	</div>

	<div class="product__container">
		<div class="product__desc">
			<div class="product__text">
			<div class="product__title">
				Gsharp
			</div>
If you’re a technical professional who requires high-quality presentation graphics for print and the Web, Gsharp is the comprehensive tool you need. Supporting all Windows, Linux, VMS and UNIX platforms.
			</div>
		</div>
	</div>

	<div class="product__container">
		<div class="product__desc">
			<div class="product__text">
				<div class="product__title">
					AVS5
				</div>
If you need powerful scientific and technical visualization applications on UNIX/Linux but don’t want spend weeks learning a new development tool, look no further.
			</div>
		</div>
	</div>

	<div class="solutions__products">

		<div class="solutions__products__container">

			<h1 class="solutions__engineers__title">
				OpenViz
			</h1>

			<div class="solutions__products__subtitle">
				A powerful data management and data visualization API
			</div>

			<div class="solutions__products__text">
				The OpenViz API consists of a flexible data management pipeline that feeds many millions of in-memory data points into a high performance rendering engine for scalable graphics generation. OpenViz allows software makers to create unique look-and-feel branding for any data visualization and seamlessly weave them into long lifecycle multi-product strategies using agile development.
			</div>

			<?php render('/components/btn/btn.php', [
				'text' => 'Discover How',
				'link' => '#contact-form'
			]); ?>

		</div>

		<div class="solutions__products__container">

			<h1 class="solutions__engineers__title">
				AVS/Express
			</h1>

			<div class="solutions__products__subtitle">
				Visually connect modules to rapidly discover insight into your data
			</div>

			<div class="solutions__products__text">
				AVS/Express is a comprehensive and versatile data visualization tool for both non-programmers and experienced developers. Parallel data processing for rapid data analysis, combined with rich visualization techniques and an intuitive graphical application development environment, allow for quick exploration of big data. A powerful  graphics engine has been designed to handle the most data intensive, interactive graphics applications using multipipe rendering and immersive virtual reality environments.
			</div>

			<?php render('/components/btn/btn.php', [
				'text' => 'Discover How',
				'link' => '#contact-form'
			]); ?>

		</div>
	</div>

	<div class="solutions__engineers">

		<div class="solutions__engineers__container">

			<h1 class="solutions__engineers__title">
				Engineering data insight since 1991
			</h1>

			<div class="solutions__engineers__subtitle">
				Experienced in Every Industry
			</div>

			<div class="solutions__engineers__text">
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
