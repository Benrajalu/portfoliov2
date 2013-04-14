 $(document).ready(function(){  
       
       $.easing.elasout = function(x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	};
	
	// This one is important, many browsers don't reset scroll on refreshes
	// Reset all scrollable panes to (0,0)
	$('div.pane').scrollTo( 0 );
	// Reset the screen to (0,0)
	$.scrollTo( 0 );
	
	// TOC, shows how to scroll the whole window
	$('.menusprites a').click(function(){//$.scrollTo works EXACTLY the same way, but scrolls the whole screen        
          $(this.hash).addClass("show");
      	  $(this.hash).removeClass("hidden");
      	  $("body").removeClass("landinghidden");
      	  $.scrollTo( this.hash, 1800); 
          return false;
	});

        $('.li2 a').click(function(){
	  $('#bcktransfo').addClass("show");
      	  $('#bcktransfo').removeClass("hidden");//$.scrollTo works EXACTLY the same way, but scrolls the whole screen        
          return false;
	});	

	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn(3200);
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});


	 $('.launch').click(function(){  
   	      $("#printer", ".boxgrid.captionfull").animate({top:'-70%'},1500) 
   	                                           .delay(200)
   	                                           .animate({top:'17%'},2000),
              $(".cover", ".boxgrid.captionfull").delay(4100).animate({top:'100%'},1100),   
              $(".backlayer", ".boxgrid.captionfull").delay(5600).animate({top:'0%'},1200),
              $("#printer", ".boxgrid.captionfull").delay(4600).animate({top:'100%'},2000),
              $(".launch").delay(1000).fadeOut(2000); 
              $(".reset").delay(7900).fadeIn(2500); 
         });

	 $('.reset').click(function(){  
              $(".cover", ".boxgrid.captionfull").delay().animate({top:'0%'},1100),   
              $(".backlayer", ".boxgrid.captionfull").delay().animate({top:'100%'},1200),
              $(".reset").delay(0).fadeOut(500); 
              $(".launch").delay(1200).fadeIn(500); 
         });

	
	   
 });   