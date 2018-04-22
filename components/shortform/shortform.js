let input = document.querySelectorAll('.shortform__input');

input.forEach(function(input){
	input.addEventListener('click', function(e) {
		e.target.classList.add("shortform__input--active");
		e.target.nextElementSibling.classList.add("shortform__label--active");
	});
});
