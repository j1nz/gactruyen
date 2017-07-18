$(document).ready(function() {
    $('.table_content').click(function() {
        $('#chapter_modal').modal('show');
        load_chapter_ajax();
    });
});

function load_chapter_ajax(){
    $.ajax({
        url : "/s/ajax/chapter",
        type : "post",
        dataType:"text",
        data : {
            storyId : $('#storyId').val(),
            functionSlug : $('#functionSlug').val(),
             categorySlug : $('#categorySlug').val(),
             storySlug : $('#storySlug').val()
        },
        success : function (result){
            $('#chapter_list').html(result);
        },
        error: function () {
           
           $("#chapter_list").html("Error when load chapter!!!");
       }
    });
}