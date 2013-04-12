;(function ($) {
    $.fn.filterDis = function(options){
    	
    	var settings = {
    		taggs    : null,
    		items   : null
    	};

    	if ( options ) {
	      $.extend( settings, options );
	    }

	    $(this).find('a').click(function(){
	    	event.preventDefault();
	    	var tag = $(this).attr("href");
	    	
	    	$(settings.items).each(function(){
	    		
	    		var pool = $(this).attr(settings.taggs).split(" ");
	    		
	    		if($.inArray(tag, pool) != -1){
					$(this).fadeIn(500);
				}
				else if(tag === "all"){
					$(this).fadeIn(500);	
				}
				else{
					$(this).fadeOut(400);
				}
	    	});
	    });


    }

})(jQuery);