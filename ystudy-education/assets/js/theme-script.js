(function($) {
    "use strict";
	$(document).ready(function($) {
		// Bind focusout event to the last <a> element in the mobile menu
		bindFocusOutEventToLastLink("#mobile-menu");
	});
	
	function bindFocusOutEventToLastLink(selector) {
		// Find the last <a> element in the entire nested structure
		var $lastLink = $(selector).find('a').last();
		
		// Bind the focusout event to the last <a> element
		$lastLink.on('focusout', function() {
			$(".offcanvas__close-btn").focus();
		});
	}
	
	jQuery(window).on('load', function() {
	    // init Masonry
		var $grid = $('.ystudy-education-masonry').masonry({
			// options
			itemSelector: '.ystudy-education-masonry-item',
		});
		// layout Masonry after each image loads
		$grid.imagesLoaded().progress( function() {
			$grid.masonry('layout');
		});
	});

	$(document).ready(function() {
		// Initialize keyboard accessible dropdowns
		initializeKeyboardAccessibleDropdown("#primary-menu, .ystudy-education-header__nav");
	});

	function initializeKeyboardAccessibleDropdown(selector) {
		var $navElements = $(selector);
		$navElements.keyboardAccessibleDropDown();
	}

	$.fn.keyboardAccessibleDropDown = function() {
		this.each(function() {
			var $nav = $(this);

			$nav.find("a").on("focus", function() {
				handleFocus($(this));
			}).on("blur", function() {
				handleBlur($(this));
			});
		});
	};

	function handleFocus($element) {
		$element.parents("li").addClass("active-focus");
	}

	function handleBlur($element) {
		$element.parents("li").removeClass("active-focus");
	}

	$('.td_circle_btn').on('click', function () {
        $('.td_header_search_wrap').toggleClass('active');
      });
	
})(jQuery);
