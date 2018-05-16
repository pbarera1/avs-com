'use strict';

(function () {
	var hero = document.querySelector('[data-plugin="defer-hero"]');
	if (!hero) return;

	window.addEventListener("load", function () {
		var src = hero.getAttribute('data-src');

		var img = new Image();
		img.src = hero.getAttribute('data-src');

		img.addEventListener("load", function () {
			hero.style.backgroundImage = 'url(\'' + img.src + '\')';
		});
	});
})();