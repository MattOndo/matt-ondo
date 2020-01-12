(function() {
	var scrollObject = {};
	window.onscroll = getScrollPosition;

	function getScrollPosition() {
		scrollObject = {
			x: window.pageXOffset,
			y: window.pageYOffset
		};
		// If you want to check distance
		if (scrollObject.y > 5) {
			document.getElementsByTagName("body")[0].classList.add("isScrolled");
		} else {
			document.getElementsByTagName("body")[0].classList.remove("isScrolled");
		}
	}
})();
