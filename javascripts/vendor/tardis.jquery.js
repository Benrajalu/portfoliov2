;(function ($) {
    $.fn.tardis = function(options){
    	
    var keys     = [];
    var konami  = '38,38,40,40,37,39,37,39,66,65';
    $(document)
        .keydown(
            function(e) {
                keys.push( e.keyCode );
                if ( keys.toString().indexOf( konami ) >= 0 ){
 
                    // do something when the konami code is executed
                    $("#alpha").append("<div id='tardis' style='position:absolute;width:100px;height:90px;background:transparent;top:50%; margin-top:-45px;left:50%;margin-left:-50px;opacity:0'><img src='http://benrajalu.net/images/tardis.png' alt='' style='width:auto' /></div>");
 					$.scrollTo("#alpha", 800);
 					$("#tardis").animate({'opacity' : '0.3'}, 800).animate({'opacity' : '0.1'}, 800).animate({'opacity' : '0.6'}, 800).animate({'opacity' : '0.1'}, 800).animate({'opacity' : '1'}, 800).animate({'left' : '200%', "opacity" : "0"}, 3000, function(){$(this).remove();});
                    // empty the array containing the key sequence entered by the user
                    keys = [];
                }
            }
        );


    }

})(jQuery);