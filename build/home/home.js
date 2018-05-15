'use strict';

(function () {
	var hero = document.querySelector('[data-plugin="defer-hero"]');
	if (!hero) return;

	var src = hero.getAttribute('data-src');

	var img = new Image();
	img.src = hero.getAttribute('data-src');

	window.addEventListener("load", function () {
		img.addEventListener("load", function () {
			hero.style.backgroundImage = 'url(\'' + img.src + '\')';
		});
	});
})();