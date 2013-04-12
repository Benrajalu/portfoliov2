
// Initiates foundation scripts
	$(document).foundation();


// Quick Contact
	$(".collapse").click(function(){
		event.preventDefault();
		var target= $(this).attr("data-target");

		if(!window.collapsed){
			
			window.collapsed= $(target).attr("data-collapse");
			
			if(window.collapsed==="closed"){
				window.collapsed="opened";
				$(target).removeClass("closed");
				$(target).addClass("opened");
				$(target).slideDown(400);
			}
			else if(window.collapsed==="opened"){
				$(target).slideUp(400);
				window.collapsed="closed";
				$(target).removeClass("opened");
				$(target).addClass("closed");
			}
		}
		else if(window.collapsed==="closed"){
			$(target).slideDown(400);
			window.collapsed = "opened";
			$(target).removeClass("closed");
			$(target).addClass("opened");
		}
		else if(window.collapsed==="opened"){
			$(target).slideUp(400);	
			window.collapsed = "closed";
			$(target).removeClass("opened");
			$(target).addClass("closed");
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

// Contact form

	$('#springContact').submit(function(e){
		e.preventDefault();

		var form = $(this);
		var post_url = form.attr('action');
		var post_data = form.serialize();
	    var errorMessage = "Non valide";
	    var successMessage = "Message reçu!";
	   	
	    if( $('form#springContact').parsley('validate') )
	    {
	    	console.log('Congratulations on validating that fiend of a form, sir.');

			var request = $.ajax({
				url: post_url,
				type: "POST",
				data: post_data,
			});
			request.done(function(msg) {
				$("#springContact #csubmit").fadeOut(500);
				$("#springContact p.message").html( successMessage );
			});
					 
			request.fail(function(jqXHR, textStatus) {
				$("#springContact p.message").html( errorMessage );
			});
	    }
	});

// Chart fun 

	drawChart= function(){
		if($("#myChart").length){
			//Get context with jQuery - using jQuery's .get() method.
			var ctx = $("#myChart").get(0).getContext("2d");
			//This will get the first returned node in the jQuery collection.
			var myNewChart = new Chart(ctx);
			// Feeding it data
			var data = {
				labels : ["CSS3","HTML5","Sucreries","jQuery","Rédaction","Derrick"],
				datasets : [
					{
						fillColor : "rgba(52,171,221,0.5)",
						strokeColor : "rgba(52,171,221,1)",
						pointColor : "rgba(52,171,221,1)",
						pointStrokeColor : "#fff",
						data : [90,85,100,70,80,5]
					}
				]
			}
			var options = {
				pointLabelFontFamily : "'Arial'",
				//String - Point label font weight
				pointLabelFontStyle : "bold",
				//Number - Point label font size in pixels	
				pointLabelFontSize : 11,
				//String - Point label font colour	
				pointLabelFontColor : "#34abdd",
			}
			// Initiating the chart, using radar type
			new Chart(ctx).Radar(data, options); 	
		}
		else{
			console.log("No chart on this page, sir");
		}
	};
	drawChart();
	

// Switch
	$("#switch").on("click", function(){
		var state = $(this).children("a").children(".text").html();
		if(state == "Plus de projets"){
			$(this).children("a").children(".text").html("Moins de projets");	
		}
		else{
			$(this).children("a").children(".text").html("Plus de projets");
		}
		
	});
	

// Filtering
	

	$("#filters").filterDis({
		taggs : "data-tags",
		items : ".project",
	});

	$("#filters").find("a").click(function(){
		$(this).parent("dd").siblings().removeClass("active");
		$(this).parent("dd").addClass("active");
	})
