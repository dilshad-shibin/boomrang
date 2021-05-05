
(function($){
    "use strict";
    if ($('#bslider-box').length) {
        $('#bslider-box').slick({
            autoplay: true,
			pauseOnHover: false,
			fade:true,
			infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 1000,
            speed: 2000,
            dots: false,
            arrows: false,
			responsive: [
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
	
	if ($('#cas-slider').length) {
        $('#cas-slider').slick({
            autoplay: true,
			pauseOnHover: false,
			fade:false,
			infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 1000,
            speed: 2000,
            dots: true,
            arrows: false,
			responsive: [
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
	
 if ($('#logotools-slider').length) {
        $('#logotools-slider').slick({
            autoplay: true,
			pauseOnHover: false,
			fade:false,
			infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 1000,
            speed: 2000,
            dots: false,
            arrows: false,
			responsive: [
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }   
	
	 if ($('#case-studies-slider').length) {
        $('#case-studies-slider').slick({
            autoplay: true,
			pauseOnHover: false,
			fade:false,
			infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            speed: 2000,
            dots: true,
            arrows: false,
			responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
				{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
	
	if ($('#testimonial-slider').length) {
        $('#testimonial-slider').slick({
            autoplay: true,
			pauseOnHover: false,
			fade:false,
			infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 3000,
            speed: 2000,
            dots: true,
            arrows: false,
			responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
				{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

})(jQuery)	

wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
	
 $('.totop').tottTop({
            scrollTop: 100
        });