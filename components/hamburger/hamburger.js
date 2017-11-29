(function() {

	const hamburger = document.querySelector('[data-plugin="toggle"]');
	const nav = document.querySelector('.nav__list');

	hamburger.addEventListener('click', function(e) {
		e.preventDefault();
		this.classList.toggle('open');
		nav.classList.toggle('nav__list--show');
	});

})();
