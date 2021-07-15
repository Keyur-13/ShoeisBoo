jQuery(function($){
 	"use strict";
   	jQuery('.main-menu > ul').superfish({
	    delay:       500,                            
	    animation:   {opacity:'show',height:'show'},  
	    speed:       'fast'                        
   	});
});

function vw_automobile_lite_menu_open_nav() {
	window.vw_automobile_lite_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function vw_automobile_lite_menu_close_nav() {
	window.vw_automobile_lite_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(document).ready(function () {
	window.vw_automobile_lite_currentfocus=null;
  	vw_automobile_lite_checkfocusdElement();
	var vw_automobile_lite_body = document.querySelector('body');
	vw_automobile_lite_body.addEventListener('keyup', vw_automobile_lite_check_tab_press);
	var vw_automobile_lite_gotoHome = false;
	var vw_automobile_lite_gotoClose = false;
	window.vw_automobile_lite_responsiveMenu=false;
 	function vw_automobile_lite_checkfocusdElement(){
	 	if(window.vw_automobile_lite_currentfocus=document.activeElement.className){
		 	window.vw_automobile_lite_currentfocus=document.activeElement.className;
	 	}
 	}
 	function vw_automobile_lite_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.vw_automobile_lite_responsiveMenu){
			if (!e.shiftKey) {
				if(vw_automobile_lite_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				vw_automobile_lite_gotoHome = true;
			} else {
				vw_automobile_lite_gotoHome = false;
			}

		}else{

			if(window.vw_automobile_lite_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.vw_automobile_lite_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.vw_automobile_lite_responsiveMenu){
				if(vw_automobile_lite_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					vw_automobile_lite_gotoClose = true;
				} else {
					vw_automobile_lite_gotoClose = false;
				}
			
			}else{

			if(window.vw_automobile_lite_responsiveMenu){
			}}}}
		}
	 	vw_automobile_lite_checkfocusdElement();
	}
});

(function( $ ) {
	jQuery('document').ready(function($){
	    setTimeout(function () {
    		jQuery("#preloader").fadeOut("slow");
	    },1000);
	});

	$(document).ready(function () {
		$(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        $('.scrollup i').fadeIn();
		    } else {
		        $('.scrollup i').fadeOut();
		    }
		});
		$('.scrollup i').click(function () {
		    $("html, body").animate({
		        scrollTop: 0
		    }, 600);
		    return false;
		});
	});	
})( jQuery );

jQuery(document).ready(function () {
  	function vw_automobile_lite_search_loop_focus(element) {
	  var vw_automobile_lite_focus = element.find('select, input, textarea, button, a[href]');
	  var vw_automobile_lite_firstFocus = vw_automobile_lite_focus[0];  
	  var vw_automobile_lite_lastFocus = vw_automobile_lite_focus[vw_automobile_lite_focus.length - 1];
	  var KEYCODE_TAB = 9;

	  element.on('keydown', function vw_automobile_lite_search_loop_focus(e) {
	    var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

	    if (!isTabPressed) { 
	      return; 
	    }

	    if ( e.shiftKey ) /* shift + tab */ {
	      if (document.activeElement === vw_automobile_lite_firstFocus) {
	        vw_automobile_lite_lastFocus.focus();
	          e.preventDefault();
	        }
	      } else /* tab */ {
	      if (document.activeElement === vw_automobile_lite_lastFocus) {
	        vw_automobile_lite_firstFocus.focus();
	          e.preventDefault();
	        }
	      }
	  });
	}
	jQuery('.search-box span a').click(function(){
        jQuery(".serach_outer").slideDown(1000);
    	vw_automobile_lite_search_loop_focus(jQuery('.serach_outer'));
    });

    jQuery('.closepop a').click(function(){
        jQuery(".serach_outer").slideUp(1000);
    });
});