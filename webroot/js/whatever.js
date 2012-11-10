//Hook up the tweet display

$(document).ready(function() {
    $(".tweet").tweet({
        username: "envatowebdesign",
        count: 3,
        loading_text: "loading tweets..."
    });
});


//Hook up flickr feed

$(document).ready(function() {
	$('div.flickr').flickrush({
		limit:6,
		id:'44499772@N06',
		random:true
	}); 
});

//Hook up the flexslider

$(document).ready(function() {
	$('.flexslider').flexslider({
		directionNav: false,
	});
});


//chris coyier's little dropdown select-->

$(document).ready(function() {

	//build dropdown
	$("<select />").appendTo(".navigation nav div");
	
	// Create default option "Go to..."
	$("<option />", {
	   "selected": "selected",
	   "value"   : "",
	   "text"    : "Go to..."
	}).appendTo("nav select");	
	
	// Populate dropdowns with the first menu items
	$(".navigation nav li a").each(function() {
	 	var el = $(this);
	 	$("<option />", {
	     	"value"   : el.attr("href"),
	    	"text"    : el.text()
	 	}).appendTo("nav select");
	});
	
	//make responsive dropdown menu actually work			
  	$("nav select").change(function() {
    	window.location = $(this).find("option:selected").val();
  	});

});	
