////////////////////////////////////////////////////////////////////////////////////////
// Events                                                                             //
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// Constants                                                                          //
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// Variables                                                                          //
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// Constructor & Destructor                                                           //
////////////////////////////////////////////////////////////////////////////////////////	
jQuery(document).ready(function () {
    jQuery(".overview_content > div:not(#welcome)").hide();
    jQuery(".overview_tabs li a:not(.not_tab)").on("click", function(){
        jQuery(".overview_tabs li a").removeClass("overview_tab_active");
        jQuery(this).addClass("overview_tab_active");
        jQuery(".overview_content > div").hide();
        var id = jQuery(this).attr("href");
        jQuery(id).show();
        return false;
    });
    
    // rating
    // jQuery(".rating").each(function(){
        // var rate = jQuery(this).attr("data-rating");
        // jQuery("<span class='stars-container'>")
          // .addClass("stars-" + rate.toString())
          // .text("★★★★★")
          // .appendTo(jQuery(this));
        // jQuery("body").append('<style>.stars-' + rate.toString() + ':after{width:' + rate + '%;}</style>');
    // });

	jQuery("#wd-copy").on("click", function(){
		var selector = document.querySelector('#wd-site-deatils-textarea');
		selector.select();
		document.execCommand('copy');

		return false;	

	});

});

////////////////////////////////////////////////////////////////////////////////////////
// Public Methods                                                                     //
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// Getters & Setters                                                                  //
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// Private Methods                                                                    //
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// Listeners                                                                          //
////////////////////////////////////////////////////////////////////////////////////////