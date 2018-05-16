(function(){
	const hero = document.querySelector('[data-plugin="defer-hero"]');
	if (!hero) return;

	window.addEventListener("load", function() {
		const src = hero.getAttribute('data-src');

		const img = new Image();
		img.src = hero.getAttribute('data-src');

		img.addEventListener("load", function() {
			hero.style.backgroundImage = `url('${img.src}')`;
		});
	});
})();

