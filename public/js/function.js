$("#contact-msg").submit(function (event) {
	event.preventDefault();
	submitFomforMSG();
	$('#contact-msg').hide();
        $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href', 'css/true-sign.css'));
        $(".msgSubmitcontact").removeClass("d-none");
});

$(document).ready(function () {
$('.po-links li').click(function(){
   var show = this.id;
    $('#po-wrap > div.' + show).show(100);
    $('#po-wrap > div:not(".'+show+'")').hide(100);
    return false;
});
	$('.po-links li').click(function() {
    $('li.po-links-active').removeClass('po-links-active');
    $(this).closest('li').addClass('po-links-active');
});
	$('.your-class').slick({
		lazyLoad: 'ondemand',
		centerMode: true,
		centerPadding: '60px',
		slidesToScroll: 1,

		autoplay: true,
		autoplaySpeed: 2000,
		slidesToShow: 3,
		responsive: [{
			breakpoint: 768,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 3
			}
		}, {
			breakpoint: 480,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
		}]
	});

	$('.header a[href*="#"], .scrolling-down a[href*="#"]')
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function (event) {
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
				location.hostname == this.hostname
			) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000, function () {
						var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) {
							return false;
						} else {
							$target.attr('tabindex', '-1');
							$target.focus();
						};
					});
				}
			}
		});
	window.onscroll = function () {
		myFunction()
	};
	var navbar = document.getElementById("header");
	var sticky = navbar.offsetTop;

	function myFunction() {
		if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky");
		} else {
			navbar.classList.remove("sticky");
		}
	}
	
});
