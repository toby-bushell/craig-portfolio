(function($) {
    'use strict';






// Fire on page load
$(document).ready(function() {

// Check if slider has loaded
var $slider_height = $('.slick-active').height();
if ($slider_height > 1){

    arrow_resize();
}

      // Add hover to portfolio for animation

      /*
    if($(window).width() > 640 ){

      $('.c-portfolio-item').on('mouseenter mouseleave', function(){


        // Add class to other portfolio items on hover
        $('.c-portfolio-item').toggleClass('c-portfolio-item--not-active');
          $(this).removeClass('c-portfolio-item--not-active');
          $('.c-portfolio-info', this).toggleClass('hovered');
        });


    }else{
      $('.c-portfolio-item').one('touchstart click', function(e){

        // If not showing more info stop link click
        if(!$('.c-portfolio-info', this).hasClass('hovered') ) {
            e.preventDefault();
        }

        $('.c-portfolio-info').removeClass('hovered');
        $('.c-portfolio-info', this).addClass('hovered');
      });
    }
*/

$('.c-portfolio-item').on('hover', function(){
  console.log('hover');
  $(this).toggleClass('active');
});
});


  $(function() {
  	// Find all YouTube videos
  	var $allVideos = $("iframe[src^='https://www.youtube.com']"),


  	    // The element that is fluid width
  	    $fluidEl = $(".o-slider__holder");

  	// Figure out and save aspect ratio for each video
  	$allVideos.each(function() {

  		$(this)
  			.data('aspectRatio', this.height / this.width)

  			// and remove the hard coded width/height
  			.removeAttr('height')
  			.removeAttr('width');

  	});

  	// When the window is resized
  	// (You'll probably want to debounce this)
  	$(window).resize(function() {
      arrow_resize(); // Adjust arrow location


      var $el = $(this);
  		var newWidth = $fluidEl.width();

  		// Resize all videos according to their own aspect ratio
  		$allVideos.each(function() {

        if(newWidth > 1066){
          console.log('too big');
          console.log(newWidth);

          newWidth = 1066;

        $el = $(this);
    			$el
    				.width(newWidth)
    				.height(newWidth * $el.data('aspectRatio'));

        }else{
        $el = $(this);
  			$el
  				.width(newWidth)
  				.height(newWidth * $el.data('aspectRatio'));
        }
  		});

  	// Kick off one resize to fix all videos on page load
  	}).resize();

  });

  // Slick slider

      $('.o-slider__holder').each(function(index, slider) {

        $(this).slick({
        dots: true,
        infinite: true,
        speed: 300,
        prevArrow: $('.o-slider__arrows-prev-'+index),
        nextArrow: $('.o-slider__arrows-next-'+index),
        responsive: [
          /*  {
            breakpoint: 512,
            settings: 'unslick'
          } */
        ]
      });

    });

    // Global function to work out arrow location
    function arrow_resize() {

      $('.o-slider__holder').each(function(index, slider) {


      console.log('arrow resize', index);
          // working out heights for arrows
        var $slider_height = $('.o-slider__image', this).height();

        var arrowHeight = $('.o-slider__arrows-prev img').height();
        var $arrows_from_top = ($slider_height / 2) - (arrowHeight / 2); // 20 is half the arrow height
        $('.o-slider__arrows-'+index).css('top', $arrows_from_top);

        console.log('arrowHeight', arrowHeight);
        console.log('slider_height', $slider_height);
      });
    }

})(jQuery);
