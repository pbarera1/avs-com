'use strict';

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

(function () {

	// Get all of the images that are marked up to lazy load
	var images = document.querySelectorAll('[data-plugin="defer-img-load"]');
	var config = {
		// If the image gets within 300px in the Y axis, start the download.
		rootMargin: '300px 0px',
		threshold: 0.01
	};

	var imageCount = images.length;
	var observer = void 0;
	var first = void 0;

	if (!('IntersectionObserver' in window)) {
		//load X images now - defer to rest to window.load event
		var loadInitial = function loadInitial(numberDeferred) {
			images = [].concat(_toConsumableArray(images));
			var initialImages = images.splice(0, numberDeferred);

			initialImages.forEach(function (image) {
				return preloadImage(image);
			});
			moveToBackgroundImages(initialImages);
		};

		loadInitial(2);

		// load rest of imgs after window load
		window.addEventListener("load", function () {
			images.forEach(function (image) {
				return preloadImage(image);
			});
			moveToBackgroundImages(images);
		});
	} else {
		observer = new IntersectionObserver(onIntersection, config);

		images.forEach(function (image) {
			if (image.hasAttribute('data-loaded')) return;
			observer.observe(image);
		});
	}

	function onIntersection(entries) {
		// Disconnect if we've already loaded all of the images
		if (imageCount === 0) {
			observer.disconnect();
		}

		// Loop through the entries
		entries.forEach(function (entry, index) {
			// Are we in viewport?
			if (entry.intersectionRatio > 0) {
				imageCount--;

				// Stop watching and load the image
				observer.unobserve(entry.target);
				preloadImage(entry.target, index);
			}
		});
	}

	function preloadImage(image, index) {
		var src = image.dataset.src;
		var srcset = image.dataset.srcset;

		if (!src) return;
		return applyImage(image, src, srcset);
	}

	function applyImage(img, src, srcset) {
		// apply img
		if (srcset) {
			img.srcset = srcset;
		}
		if (src) {
			img.src = src;
		}
		// Prevent this from being lazy loaded a second time.
		img.setAttribute('data-loaded', 'true');
		// remove attributes
		img.removeAttribute('data-src');
		img.removeAttribute('data-srcset');
	}
})();