// albums
var albums = function(){
    $.ajax({
        url: SITE_URL + "photo/albumList",
        type: 'POST',
        data: 'user_id=' + UID,
        cache: false,
        success: function(data){
            $('#albumList').html(data);
            $('#albumList').children('section').slideDown(500);
        }
    });
};
albums();

// save photo data to database after upload, rename it too
var save_photodata = function(filename, filesize, album_id){
    $.ajax({
        url: SITE_URL + "photo/save_photodata",
        type: 'POST',
        data: 'filename=' + filename + '&filesize=' + filesize + '&album_id=' +album_id,
        cache: false,
        success: function(data){
            var file = jQuery.parseJSON(data);
            $('#photolist').prepend('<a class="forphoto" style="display:none" rel="photo-ajax.html" href="javascript:void(0)">' +
                    '<div class="photo-canvas"><img src="'+ SITE_URL +'photos/' + file.photo_name + '"></div></a>');
            $('#photolist').children('a:first').fadeIn("medium");
        }
    });
};

$('#upload-form').live('submit', function(e){
    //e.preventDefault();
    var photofile = $('#photofile').val();
    if(isNullOrEmpty(photofile)){
        alert('pilih dulu file foto yang akan diunggah.');
        return false;
    }
    var caption = $('#caption').val();
    if(isNullOrEmpty(caption)){
        alert('isi dulu judul foto yang akan diunggah.');
        return false;
    }
    //e.preven
});

// all photos
var all_photo = function(){
    $.ajax({
        url: SITE_URL + "photo/all_photo",
        type: 'POST',
        data: 'user_id=' + UID,
        cache: false,
        success: function(data){
            $('#allPhoto').append(data).attr('rel', '');
        }
    });
};
all_photo();

// when album photos clicked
$('.foralbum').live('click', function(){
    $this = $(this);
    var url = $(this).attr('href');
    $('#allPhoto').fadeTo(200, 0.5);
    $('#photo-loader').show();
    $.ajax({
        url: url,
        type: 'POST',
        cache: false,
        success: function(data){
            $('#allPhoto').html(data).attr('rel', $this.attr('id'));
            $('#allPhoto').fadeTo(200, 1);
        }
    });
    return false;
});

/* ADDING FORM */
$('#addlink').live('click', function(){
    var group = $(this).parent().parent().attr('id');
    $('#add-'+group+'-form .postbutton').toggle();
    $('#add-'+group+'-form').slideToggle('fast');
});

/* ADD ALBUM */
$('#add-album').live('click', function(){
    $form = $(this).parent();
    var url = $form.attr('action');
    var albumname = $(this).siblings('#albumname').val();
    if(jQuery.trim(albumname) == ''){
        alert('Isi dahulu kolom nama album.');
        $('#albumname').focus();
        return false;
    };
    var description = $(this).siblings('#description').val();
    if(jQuery.trim(description) == ''){
        alert('Isi dahulu kolom deskripsi album.');
        $('#description').focus();
        return false;
    };
    var privacy = $(this).siblings('#privacy').val();
    $('#album-loader').show();
    $.ajax({
        url: url,
        type: 'POST',
        data: 'albumname=' + albumname + '&description=' + description + '&privacy=' + privacy,
        cache: false,
        success: function(data){
            $form.parent().parent().slideUp(500);
            setTimeout(albums, 600);
        }
    });
    return false;
});

/* EDITING FORM */
$('#edit-about').live('click', function(){
    var group = $(this).parent().parent().attr('id');
    $('#edit-'+group+'-form .postbutton').toggle();
    $('#edit-'+group+'-form').toggle();
    $('#edit-'+group+'-form #data').val($('#'+group+' .desc').html());
    $('#'+group+' .desc').toggle();
});
$('.editinfo').live('click', function(){
    $parent = $(this).parent().parent().parent();
    $row = $(this).parent().parent();
    var id = $(this).attr('id');
    if($parent.children('.edit-container#'+id).html() == ''){
        var group = $(this).parent().parent().parent().parent().parent().attr('id');
        var fieldname = '';
        if(group == 'basicinfo')
            fieldname = id;
        $('#'+group+'-loader').show();
        $('.editinfo, .deleteinfo').css('visibility', 'hidden');
        $.ajax({
            type: 'POST',
            url: SITE_URL + 'user/form_edit_item/' + group + '/' + fieldname,
            data: 'data_id=' + id,
            cache: false,
            success: function(data){
                $parent.children('.edit-container#'+id).html(data);
                $row.slideUp(400);
                $parent.children('.edit-container#'+id).children().slideDown(400);
                $('#'+group+'-loader').hide();
            }
        });
    } else {
        $('.editinfo, .deleteinfo').css('visibility', 'hidden');
        $row.slideUp(400);
        $parent.children('.edit-container#'+id).children().slideDown(400);
    }
    return false;
});
$('.cancelbutton').live('click', function(){
    $('.editinfo, .deleteinfo').css('visibility', 'visible');
    $(this).parent().parent().parent().parent().children('.row, blockquote').slideDown(400);
    $(this).parent().parent().slideUp(400);
    return false;
});

/* Hide and show button */

$('.row, blockquote').live('mouseover', function(){
    $(this).children('.option-button').children('.editinfo').show();
    $(this).children('.option-button').children('.deleteinfo').show();
    $(this).children('.data').children('.editinfo').show();
    $(this).children('.data').children('.deleteinfo').show();
});
$('.row, blockquote').live('mouseout', function(){
    $(this).children('.option-button').children('.editinfo').hide();
    $(this).children('.option-button').children('.deleteinfo').hide();
    $(this).children('.data').children('.editinfo').hide();
    $(this).children('.data').children('.deleteinfo').hide();
});

$('.sidebar-content').live('mouseover', function(){
    $(this).children('header').children('#addlink').show();
    $(this).children('header').children('#edit-about').show();
});
$('.sidebar-content').live('mouseout', function(){
    $(this).children('header').children('#addlink').hide();
    $(this).children('header').children('#edit-about').hide();
});

/* DELETING ITEM */
$('.deleteinfo').live('click', function(){
    var group = $(this).parent().parent().parent().parent().parent().attr('id');
    if(confirm('Are You sure want to delete this information?\nDeleting cannot be undone.')){
        var data_id = $(this).attr('id');
        $link = $(this);
        $.ajax({
            url: SITE_URL + "user/delete_profile_item",
            type: 'POST',
            data: 'data_id=' + data_id,
            cache: false,
            success: function(data){
                $('#'+group+'-loader').show();
                switch(group){
                    case 'eduwork':
                        setTimeout(eduwork_ajax, 600);
                        break;
                    case 'activity':
                        setTimeout(activity_ajax, 600);
                        break;
                    case 'favquote':
                        setTimeout(favquote_ajax, 600);
                        break;
                    case 'contact':
                        setTimeout(contact_ajax, 600);
                        break;
                };
            }
        });
    }
    return false;
});