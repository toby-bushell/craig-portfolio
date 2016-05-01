(function($) {
    'use strict';
    console.log('hover');

    // Add hover to portfolio for animation
  if($(window).width() > 640 ){
    console.log('more than');
    $('.c-portfolio-item').on('hover', function(){
      $('.c-portfolio-info', this).toggleClass('hovered');
    });
  }else{console.log('less than');
    $('.c-portfolio-item').one('touchstart click', function(e){

      // If not showing more info stop link click
      if(!$('.c-portfolio-info', this).hasClass('hovered') ) {
          e.preventDefault();
      }

      $('.c-portfolio-info').removeClass('hovered');
      $('.c-portfolio-info', this).addClass('hovered');
    });
  }


})(jQuery);
