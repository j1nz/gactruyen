$(document).ready(function() {
    
    //console.log($('#storyId').val());
    //console.log($('#chapterId').val());
    //load_content_ajax();
    
});

function load_content_ajax(){
    $.ajax({
        url : "/s/ajax/story",
        type : "post",
        dataType:"text",
        data : {
             storyId : $('#storyId').val(),
             chapterId : $('#chapterId').val(),
             functionSlug : $('#functionSlug').val(),
             categorySlug : $('#categorySlug').val(),
             storySlug : $('#storySlug').val()
        },
        success : function (result){
            $('#content_story').html(result);
            $('#content_story').append('<div class="chapter-end" ><span>o O o</span></div>');
        }
    });
}