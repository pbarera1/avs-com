(function(){
	const hero = document.querySelector('[data-plugin="defer-hero"]');
	if (!hero) return;

	const src = hero.getAttribute('data-src');

	const img = new Image();
	img.src = hero.getAttribute('data-src');

	window.addEventListener("load", function() {
		img.addEventListener("load", function() {
			hero.style.backgroundImage = `url('${img.src}')`;
		});
	});
})();

