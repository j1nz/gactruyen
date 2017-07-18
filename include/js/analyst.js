var currentUrl = null;
var storyUrl = null;

var ipClient = null;

var latitude, longitude;

var times_view = 1;

$(document).ready(function() {
	currentUrl = $('#commonSlug').val();
	storyUrl = $('#a-story').attr('href');

	loadIpClientAjax();

	tryGeolocation();

});

function loadIpClientAjax() {
	$.ajax({
        url : "/s/ajax/ipclient",
        type : "post",
        dataType:"text",
        success : function (result){
            ipClient = result;
        },
        error: function () {
           
           console.log('ip error');
       }
    });
}

var apiGeolocationSuccess = function(position) {
    //alert("API geolocation success!\n\nlat = " + position.coords.latitude + "\nlng = " + position.coords.longitude);

    //console.log(position.coords.latitude + ' ' + position.coords.longitude);
    latitude = position.coords.latitude;
    longitude = position.coords.longitude;

    var geolocation = latitude + '_' + longitude;

    if (currentUrl != null) {
    	setCookie('_gc', geolocation, 15, currentUrl);
		setCookie('_ic', ipClient, 15, currentUrl);
		setCookie('_gs', geolocation, 15, storyUrl);
		setCookie('_is', ipClient, 15, storyUrl);

		if (getCookie('times_view') != null) {
			var view = parseInt(getCookie('times_view'));

			times_view = view + 1;
			if (ipClient == getCookie('_ic')) {
				setCookie('times_view', times_view, 15, currentUrl);
			}
			
		} else {
			setCookie('times_view', times_view, 15, currentUrl);
		}
	}


};

var tryAPIGeolocation = function() {
    jQuery.post( "https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyBj60bavaBijSkVCYuU_EMaGaBtUGQHyTA", function(success) {
        apiGeolocationSuccess({coords: {latitude: success.location.lat, longitude: success.location.lng}});
  })
  .fail(function(err) {
    console.log("API Geolocation error! \n\n"+err);
  });
};

var browserGeolocationSuccess = function(position) {
    console.log("Browser geolocation success!\n\nlat = " + position.coords.latitude + "\nlng = " + position.coords.longitude);
};

var browserGeolocationFail = function(error) {
  switch (error.code) {
    case error.TIMEOUT:
      console.log("Browser geolocation error !\n\nTimeout.");
      break;
    case error.PERMISSION_DENIED:
      if(error.message.indexOf("Only secure origins are allowed") == 0) {
        tryAPIGeolocation();
      }
      break;
    case error.POSITION_UNAVAILABLE:
      console.log("Browser geolocation error !\n\nPosition unavailable.");
      break;
  }
};

var tryGeolocation = function() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
        browserGeolocationSuccess,
      browserGeolocationFail,
      {maximumAge: 50000, timeout: 20000, enableHighAccuracy: true});
  }
};

