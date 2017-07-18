function swipeLeftHandle(element, fnCallback = null) {

    $( element ).addClass( "swipeleft" );
    
    if (typeof(fnCallback) == 'function') {
        fnCallback();
    }
}

function swipeRightHandle(element, fnCallback = null) {
    $( element ).addClass( "swiperight" );
    
    if (typeof(fnCallback) == 'function') {
        fnCallback();
    }
}

$(document).ready(function() {
    $('#content_story').on('swipeleft', function() {
        swipeLeftHandle('.content-story');
        loadChapter('next');
    });

    $('#content_story').on('swiperight', function() {
        swipeRightHandle('.content-story');
        loadChapter('prev');
    });
});



function loadChapter(direction) {
    var totalChapter = parseInt($('#totalChapter').val());
    var chapterCurrent = parseInt($('#chapterCurrent').val());
    var chapterIdNext = 0;
    var chapterIndex = 0;

    if (direction == 'prev') {
        chapterIdNext = parseInt($('#chapterId').val()) - 1;
        chapterIndex = parseInt($('#chapterCurrent').val()) - 1;
    }

    if (direction == 'next') {
        chapterIdNext = parseInt($('#chapterId').val()) + 1;
        chapterIndex = parseInt($('#chapterCurrent').val()) + 1;
    }
    
    if (chapterIndex > totalChapter) {
        chapterIndex = totalChapter;
        chapterIdNext = chapterIdNext - 1;
    } else if (chapterIndex < 1) {
        chapterIndex = 1;
        chapterIdNext = chapterIdNext + 1;
    } 
    
    loadChapterAjax(parseInt($('#storyId').val()), chapterIdNext, chapterIndex);
}

/*function reloadNewChapter() {
    var section = $('.content-story');

    section.load('.content-story', function(event){

        $('.content-story').removeClass('swipeleft');
        //...
        var url = '/' + $('#functionSlug').val() + '/' + $('#categorySlug').val() + '/' + $('#storySlug').val() + '/chap-' +chapterIndex;
        window.history.pushState({}, '', url);
    });
}
*/
function loadChapterAjax(storyId, chapterId, chapterIndex) {

    if (typeof(chapterId) === 'number') {
        $.ajax({
            url : "/s/ajax/story",
            type : "post",
            dataType:"text",
            data : {
                 storyId : storyId,
                 chapterId : chapterId,
                 indexChap : chapterIndex,
                 functionSlug : $('#functionSlug').val(),
                 categorySlug : $('#categorySlug').val(),
                 storySlug : $('#storySlug').val()
            },
            success : function (result){
                
                var chapter_no = 'Chương ' + chapterIndex;
                
                $('#chapterId').val(chapterId);
                $('#chapterCurrent').val(chapterIndex);

                $('#content_story').html(result);

                $('#content_story').append('<div class="chapter-end" ><span>o O o</span></div>');
                $('#chapter_no').text(chapter_no);
                
                //reloadNewChapter();
                var url = '/' + $('#functionSlug').val() + '/' + $('#categorySlug').val() + '/' + $('#storySlug').val() + '/chap-' +chapterIndex;
                window.history.pushState({}, '', url);

                var prev_chap = chapterIndex - 1;
                var next_chap = chapterIndex + 1;

                var default_link_story = $('#a-story').attr('href');

                var link_chapter_prev = '/chap-' + prev_chap + '/';
                var link_chapter_next = '/chap-' + next_chap + '/';
                var link_chapter_current = '/chap-' + chapterIndex + '/';

                $('.a-prev').attr('href', default_link_story + link_chapter_prev);
                $('.a-next').attr('href', default_link_story + link_chapter_next);

                $('#commonSlug').val(default_link_story + link_chapter_current);
                
                $('body, html').animate({
                    scrollTop: 100
                }, 'slow');
            }
        }); // end ajax
    } // end if
}


