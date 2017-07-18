$(document).ready(function() {
	var scroll_cookie = getCookie('scroll-last-page');
	var scroll_cookie_url = getCookie('scroll-last-page-url');
	var commonSlug = $('#commonSlug').val();

	if (scroll_cookie != null) {
		$('body, html').animate({
    		scrollTop: scroll_cookie
    	}, 'slow');
	}

    var timeStamp = new Date().getTime();
	var iScrollPos = 0;
    $(window).scroll(function () {
    	

		var timeNow = new Date().getTime();
		var positionScroll = $(this).scrollTop();

		//chặn scroll liên tục
	    if (timeNow - timeStamp < 500) {
	    	timeStamp = timeNow;
	    	return;
	    } else {
	    	timeStamp = timeNow;
		}

        if ($(this).scrollTop() > 50) {
        	if (positionScroll < iScrollPos) {
			    // Hành động scroll lên
			    $('#button_setting').fadeIn();
			    /*console.log('scroll up');
			    console.log('scroll: ' +positionScroll);
			    console.log('point: ' +iScrollPos);*/
			} /*else {
				console.log('scroll down');
			    console.log('scroll: ' +positionScroll);
			    console.log('point: ' +iScrollPos);
			}*/

			iScrollPos = positionScroll;

			if (commonSlug != null) {
				if (commonSlug != scroll_cookie_url) {
					if (scroll_cookie_url != null) {
						eraseCookie('scroll-last-page', scroll_cookie_url);
					}
					
				}
				setCookie('scroll-last-page', positionScroll, 15, commonSlug);

				if (getCookie('scroll-last-page-url') == null)
					setCookie('scroll-last-page-url', commonSlug, 15, commonSlug);
			}
			

        	/*$('#go_to_top').fadeIn();*/
        	// $('#widget_quote_fixed').fadeIn();

        	setTimeout('hide_setting()', 1500);
        }
          
        else {
        	/*$('#widget_quote_fixed').fadeOut();*/
          	/*$('#go_to_top').fadeOut();*/
          	hide_setting();
         
        }
    });
});
