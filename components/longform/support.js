let expand = document.querySelectorAll('[data-plugin="expand"]');

expand.forEach(function(item) {
	item.addEventListener('click', function(e) {
		e.target.parentElement.nextElementSibling.classList.toggle("hidden");
	})
})
