'use strict';

(function () {

	var hamburger = document.querySelector('[data-plugin="toggle"]');
	var nav = document.querySelector('.nav__list');

	hamburger.addEventListener('click', function (e) {
		e.preventDefault();
		this.classList.toggle('open');
		nav.classList.toggle('nav__list--show');
	});
})();