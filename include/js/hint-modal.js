$(document).ready(function() {
    var readmode_cookie = getCookie('setting_readmode_modal');
    
    if (readmode_cookie == null) {
        $('#hint_setting').modal('show');
    }
    
    $('#close_hint_modal').click(function() {
//        var d = new Date();
//        
//        var expires = d.setTime(d.getTime() + (15*24*60*60*1000));

        if ($('#not_display_hint_readmode').is(':checked')) {
            setCookie('setting_readmode_modal', 'readmode', 15, '/s/');
        }
    });
});


