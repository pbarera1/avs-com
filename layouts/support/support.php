<div class="support">

	<div class="support__intro">

		<h1 class="support__h1">Support</h1>

		<div class="support__tagline">
			We love helping our customers!
		</div>

		<svg class="wave" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="50 20 50 80" preserveAspectRatio="none">
			<path d="M0,100 C15,100 35,50 50,50 L50,50 C65,50 85,100 100,100 Z"></path>
		</svg>

	</div>

	<div class="support__portal">

		<div class="support__portal__container">

			<div class="support__portal__container-text">

				<h2>AVS Support Help Portal</h2>

				<p>
					The AVS Support Help Center will guide you to self-solve an issue or send a help request to the AVS Support team. Here you can inquire about a number of different topics including: licensing, download links, submit technical and product questions, and more.
				</p>

				<?php render('/components/btn/btn.php', [
					'text' => 'Enter Here',
					'link' => 'https://avsdev.atlassian.net/servicedesk/customer/portal/1',
				]); ?>

				<div class="support__passwords">

					<h3>
						Password Requirements
					</h3>

					<ul>
						<li>Avoid patterns, consecutive letters (either alphabetical or on the keyboard) and numbers</li>
						<li>Avoid replacing letters with similar numbers or symbols (example 3 for e or $ for s)</li>
						<li>Avoid short passwords.</li>
						<li>Do use a password manager to generate long/random passwords</li>
						<li>Do use lots of ‘parts’ to your password, which can make it hard to crack and easier to remember. Four unrelated english words is very strong (correcthorsebatterystaple), as is a combination of words and random numbers (tape934elephant%*)</li>
					</ul>

				</div>

			</div>

			<img src="/img/support-portal.png" alt="" class="support__portal-img">

		</div>

	</div>

</div>
