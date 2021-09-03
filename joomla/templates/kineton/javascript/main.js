(function($) {
"use strict";


 
$(window).on('load', function(){

        var $preloader = $('.ct-preloader');
        var $content = $('.ct-preloader-content');

        var $timeout = setTimeout(function(){
            $($preloader).addClass('animated').addClass('fadeOut');
            $($content).addClass('animated').addClass('fadeOut');
        }, 0);
        var $timeout2 = setTimeout(function(){
            $($preloader).css('display', 'none').css('z-index', '-9999');
        }, 1200);
    });
	
	
	
 
	
	//prettyPhoto 
jQuery(document).ready(function(){
	jQuery('a[data-gal]').each(function() {
	    jQuery(this).attr('rel', jQuery(this).data('gal'));
	});  	
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:false,overlay_gallery: false,social_tools:false,deeplinking:false});
}); 


 
	//open popup
	$('.cd-popup-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup').addClass('is-visible');
	});
	
	//close popup
	$('.cd-popup').on('click', function(event){
		if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.cd-popup').removeClass('is-visible');
	    }
    });
	
	
	
	if($(".menuButon").length > 0)
    {
        $("#openMenu").animatedModal({
                modalTarget:'menuModal',
                animatedIn:'bounceInDown',
                animatedOut:'bounceOutUp',
                color:'#3498db'
                
        });
    }
    if($(".mainMenu").length > 0)
    {
        var subStatus = true;
        $(".hasChildItem > a").click(function(e){
           e.preventDefault();
           if($(this).parent('li').hasClass('active'))
           {
               $(this).parent('li').removeClass('active');
               $(this).next('ul.subMenu').slideUp('slow');
           }
           else
           {
                $(".mainMenu ul li.hasChildItem.active ul.subMenu").slideUp('slow');
                $(".mainMenu ul li.hasChildItem.active").removeClass("active");
                $(this).parent().toggleClass('active');
                $(this).next('ul.subMenu').slideToggle('slow');
            }
        });
    }


})(jQuery);
