var $container = $('#notes');

var load_notes = function(){
    var url = SITE_URL + 'blog/get_notes';
    $.ajax({
        type: 'POST',
        url: url,
        data: 'user_id=' + UID,
        cache: false,
        success: function(data){
            var $newItem = $(data);
            $container.prepend($newItem).masonry('reload');
            $('#blog-loader').hide();
        }
    });
    return false;
};
var detail_notes = function(){
    var url = SITE_URL + 'blog/get_detail_notes';
    $.ajax({
        type: 'POST',
        url: url,
        data: 'NID=' + NID + '&EID=' + EID,
        cache: false,
        success: function(data){
            var $newItem = $(data);
            $container.prepend($newItem);
            $container.children('.item').css('width', '777px').css('display', 'none');
            $container.children('.item').fadeIn('medium');
            //$container.children('.item').children('.option-detail').css('height', $container.children('.item').children('.content-detail').height()+'px');
            //$container.masonry('reload');
            $('#blog-loader').hide();
        }
    });
    return false;
};

$(function(){
    $container.masonry({
        itemSelector: '.item'
    });

    if(PAGE == 'blog')
        load_notes();
    else
        detail_notes();
    
    $('#add-blog').click(function(){
        $('.simple_overlay').slideToggle(300);
    //$container.slideToggle('medium');
    });
    $('#saveblog').click(function(){
        $('#blog-loader').show();
        $form = $(this).parent();
        var note_id = $('#note_id').val();
        var encrypt_id = $('#encrypt_id').val();
        if(note_id == '')
            var url = $form.attr('action');
        else
            var url = SITE_URL + 'blog/update_post';
        
        var title = jQuery.trim($('#title').val());
        var privacy = $('#privacy').val();
        var status = $('input[@name=status]:checked').val();
        var content = jQuery.trim($('#content').val());
        if(title == ''){
            alert('Please input title field first.');
            $('#title').focus();
            return false;
        };
        if(content == ''){
            alert('Please input blog content field first.');
            $('#content').focus();
            return false;
        };
        $.ajax({
            type: 'POST',
            url: url,
            data: 'title=' + title + '&privacy=' + privacy + '&status=' + status + '&content=' + content + '&note_id=' + note_id + '&encrypt_id=' + encrypt_id,
            cache: false,
            success: function(data){
                $('.simple_overlay').slideUp(300);
                $('#title, #content').val('');
                if(note_id != ''){
                    $('.item#'+note_id).fadeOut(200);
                };
                setTimeout(function(){
                    if(PAGE == 'blog'){
                        var $newItem = $(data);
                        $container.slideDown('medium').prepend($newItem).masonry('reload');
                    } else {
                        $container.html('');
                        detail_notes();
                    }
                }, 400);
                $('#blog-loader').hide();
            }
        });
        return false;
    });
    $('.cancelbutton').click(function(){
        if(confirm('Are you sure want to cancel this progress? \nAll progress will be reset.')){
            $('.simple_overlay').hide();
            $('#title').val('');
            $('#content').val('');
            $('#note_id').val('');
            $('#encrypt_id').val('');
            $('.postbutton').html('Save');
        }
        return false;
    });
    $('.delete-blog').live('click', function(){
        if(confirm('Ayou sure want to delete this post? \nThis action cannot be undone.')){
            $('#blog-loader').show();
            $item = $(this).parent().parent().parent();
            var note_id = $(this).attr('id');
            var encrypt_id = $(this).attr('rel');
            var wall_id = $(this).attr('data');
            $.ajax({
                type: 'POST',
                url: SITE_URL + 'blog/delete_post',
                data: 'note_id=' + note_id + '&encrypt_id=' + encrypt_id + '&wall_id=' + wall_id,
                cache: false,
                success: function(data){
                    $container.masonry('remove', $item);
                    setTimeout(function(){
                        $container.masonry('reload');
                    }, 100);
                    $('#blog-loader').hide();
                }
            });
        }
        return false;
    });
    $('.edit-blog').live('click', function(){
        $('#blog-loader').show();
        var note_id = $(this).attr('id');
        var encrypt_id = $(this).attr('rel');
        $.ajax({
            type: 'POST',
            url: SITE_URL + 'blog/edit_post',
            data: 'note_id=' + note_id + '&encrypt_id=' + encrypt_id,
            cache: false,
            success: function(data){
                var jsons = jQuery.parseJSON(data);
                $('#title').val(jsons.title);
                $('#privacy').val(jsons.privacy);
                $('#status'+jsons.status).attr('checked', 'checked');
                $('#content').val(jsons.note);
                $('#note_id').val(jsons.id_note);
                $('#encrypt_id').val(jsons.encrypt_id);
                $('.postbutton').html('Update');
                $('.simple_overlay').slideDown(300);
                $('#blog-loader').hide();
            }
        });
        return false;
    });
    
    $('.readmore').live('click', function(){
        
        })
});