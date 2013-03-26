
// Initiates foundation scripts
	$(document).foundation();

// Backstretch
	 $(".desk").backstretch("images/desk.jpg");
	 $(".screen").backstretch("images/screen.png");

// Quick Contact
	$(".collapse").click(function(){
		
		var target= $(this).attr("data-target");

		if(!window.collapsed){
			
			window.collapsed= $(target).attr("data-collapse");
			
			if(window.collapsed==="closed"){
				window.collapsed="opened";
				$(target).slideDown(400);
			}
			else if(window.collapsed==="opened"){
				$(target).slideUp(400);
				window.collapsed="closed";
			}
		}
		else if(window.collapsed==="closed"){
			$(target).slideDown(400);
			window.collapsed = "opened";
		}
		else if(window.collapsed==="opened"){
			$(target).slideUp(400);	
			window.collapsed = "closed";
		}
		else{
			return(false);
		}
	});
	$(".close").click(function(){
		var target = $(this).attr("data-target");
		$(target).slideUp(400);
		window.collapsed="closed";
	});

// Featured effects

	animus1 = function(target){
		var original= $(target).children(".underlay").attr("src");
		var substitute = $(target).children(".underlay").attr("data-hover");

			$(target).hover(function(){
				$(this).children(".underlay").attr("src", substitute);
			}, 
			function(){
				$(this).children(".underlay").attr("src", original);
			});
	}

// Responsive Pictures 
	$('picture').picture();