 // education widget
var eduwork_ajax = function(){
    $.ajax({
        url: SITE_URL + "user/get_profile_data/eduwork/",
        type: 'POST',
        data: 'user_id=' + UID,
        cache: false,
        success: function(data){
            $('#eduwork').html(data);
            $('#eduwork').children('section').slideDown(500);
        }
    });
};
eduwork_ajax();

$('#add-eduwork-form .postbutton').live('click', function(){
    $form = $(this).parent();
    $button = $(this);
    $(this).html('Adding..').attr('disabled', 'disabled');
    var termname_id = $form.children('#termname_id').val();
    var data = $form.children('#data').val();
    var date1 = $form.children('#date1').val();
    var date2 = $form.children('#date2').val();
    if(jQuery.trim(data) == ''){
        alert('Fill the place field first.');
        $button.removeAttr('disabled').html('Add');
        return false;
    }
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: 'termname_id=' + termname_id + '&data=' + data + '&date1=' + date1 + '&date2=' +date2,
        cache: false,
        success: function(data){
            $('#eduwork-loader').show();
            $form.parent().parent().slideUp(500);
            setTimeout(eduwork_ajax, 600);
        }
    });
    return false;
});
$('#edit-eduwork-form .postbutton').live('click', function(){
    $form = $(this).parent();
    $button = $(this);
    $(this).html('Updating..').attr('disabled', 'disabled');
    var data_id = $form.children('#data_id').val();
    var termname_id = $form.children('#termname_id').val();
    var data = $form.children('#data').val();
    var date1 = $form.children('#date1').val();
    var date2 = $form.children('#date2').val();
    if(jQuery.trim(data) == ''){
        alert('Fill the place field first.');
        $button.removeAttr('disabled').html('Add');
        return false;
    }
    $('#eduwork-loader').show();
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: 'data_id=' + data_id + '&termname_id=' + termname_id + '&data=' + data + '&date1=' + date1 + '&date2=' +date2,
        cache: false,
        success: function(data){
            $form.parent().parent().parent().parent().slideUp(500);
            $('.editinfo, .deleteinfo').css('visibility', 'visible');
            setTimeout(eduwork_ajax, 600);
        }
    });
    return false;
});

// activity widget
var activity_ajax = function(){
    $.ajax({
        url: SITE_URL + "user/get_profile_data/activity/",
        type: 'POST',
        data: 'user_id=' + UID,
        cache: false,
        success: function(data){
            $('#activity').html(data);
            $('#activity').children('section').slideDown(500);
        }
    });
};
activity_ajax();

$('#add-activity-form .postbutton').live('click', function(){
    $form = $(this).parent();
    $button = $(this);
    $(this).html('Adding..').attr('disabled', 'disabled');
    var termname_id = $form.children('#termname_id').val();
    var data = $form.children('#data').val();
    var date1 = $form.children('#date1').val();
    if(jQuery.trim(data) == ''){
        alert('Fill the activity field first.');
        $button.removeAttr('disabled').html('Add');
        return false;
    }
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: 'termname_id=' + termname_id + '&data=' + data + '&date1=' + date1,
        cache: false,
        success: function(data){
            $('#activity-loader').show();
            $form.parent().parent().slideUp(500);
            setTimeout(activity_ajax, 600);
        }
    });
    return false;
});
$('#edit-activity-form .postbutton').live('click', function(){
    $form = $(this).parent();
    $button = $(this);
    $(this).html('Updating..').attr('disabled', 'disabled');
    var data_id = $form.children('#data_id').val();
    var termname_id = $form.children('#termname_id').val();
    var data = $form.children('#data').val();
    var date1 = $form.children('#date1').val();
    if(jQuery.trim(data) == ''){
        alert('Fill the activity field first.');
        $button.removeAttr('disabled').html('Add');
        return false;
    }
    $('#activity-loader').show();
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: 'data_id=' + data_id + '&termname_id=' + termname_id + '&data=' + data + '&date1=' + date1,
        cache: false,
        success: function(data){
            $form.parent().parent().parent().parent().slideUp(500);
            $('.editinfo, .deleteinfo').css('visibility', 'visible');
            setTimeout(activity_ajax, 600);
        }
    });
    return false;
});

// basicinfo widget
var basicinfo_ajax = function(){
    $.ajax({
        url: SITE_URL + "user/get_basic_info/",
        type: 'POST',
        data: 'user_id=' + UID,
        cache: false,
        success: function(data){
            $('#basicinfo').html(data);
            $('#basicinfo').children('section').slideDown(500);
        }
    });
};
basicinfo_ajax();

$('#edit-basicinfo-form .postbutton').live('click', function(){
    $form = $(this).parent();
    $button = $(this);
    $(this).html('Updating..').attr('disabled', 'disabled');
    var termname_id = $form.children('#termname_id').val();
    var data = $form.children('#data').val();
    if(jQuery.trim(data) == ''){
        alert('Fill your self description field first.');
        $button.removeAttr('disabled').html('Update');
        return false;
    }
    $('#basicinfo-loader').show();
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: 'termname_id=' + termname_id + '&data=' + data,
        cache: false,
        success: function(data){
            $form.parent().parent().parent().slideUp(500);
            $('.editinfo, .deleteinfo').css('visibility', 'visible');
            setTimeout(basicinfo_ajax, 600);
        }
    });
    return false;
});

// aboutme widget
var aboutme_ajax = function(){
    $.ajax({
        url: SITE_URL + "user/get_profile_data/aboutme/",
        type: 'POST',
        data: 'user_id=' + UID,
        cache: false,
        success: function(data){
            $('#aboutme').html(data);
            $('#aboutme').children('section').slideDown(500);
        }
    });
};
aboutme_ajax();

$('#edit-aboutme-form .postbutton').live('click', function(){
    $form = $(this).parent();
    $button = $(this);
    $(this).html('Updating..').attr('disabled', 'disabled');
    var termname_id = $form.children('#termname_id').val();
    var data_id = $form.children('#data_id').val();
    var data = $form.children('#data').val();
    if(jQuery.trim(data) == ''){
        alert('Fill your self description field first.');
        $button.removeAttr('disabled').html('Update');
        return false;
    }
    $('#aboutme-loader').show();
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: 'data_id=' + data_id + '&termname_id=' + termname_id + '&data=' + data,
        cache: false,
        success: function(data){
            $form.parent().parent().slideUp(500);
            $('.editinfo, .deleteinfo').css('visibility', 'visible');
            setTimeout(aboutme_ajax, 600);
        }
    });
    return false;
});

// favquote widget
var favquote_ajax = function(){
    $.ajax({
        url: SITE_URL + "user/get_profile_data/favquote/",
        type: 'POST',
        data: 'user_id=' + UID,
        cache: false,
        success: function(data){
            $('#favquote').html(data);
            $('#favquote').children('section').slideDown(500);
        }
    });
};
favquote_ajax();

$('#add-favquote-form .postbutton').live('click', function(){
    $form = $(this).parent();
    $button = $(this);
    $(this).html('Adding..').attr('disabled', 'disabled');
    var termname_id = $form.children('#termname_id').val();
    var data = $form.children('#data').val();
    var data2 = $form.children('#data-2').val();
    if(jQuery.trim(data) == ''){
        alert('Fill the quote field first.');
        $button.removeAttr('disabled').html('Add');
        return false;
    }
    if(jQuery.trim(data2) == ''){
        alert('Fill the "quote by" field first.');
        $button.removeAttr('disabled').html('Add');
        return false;
    }
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: 'termname_id=' + termname_id + '&data=' + data + '||' + data2,
        cache: false,
        success: function(data){
            $('#favquote-loader').show();
            $form.parent().parent().slideUp(500);
            setTimeout(favquote_ajax, 600);
        }
    });
    return false;
});
$('#edit-favquote-form .postbutton').live('click', function(){
    $form = $(this).parent();
    $button = $(this);
    $(this).html('Updating..').attr('disabled', 'disabled');
    var data_id = $form.children('#data_id').val();
    var termname_id = $form.children('#termname_id').val();
    var data = $form.children('#data').val();
    var data2 = $form.children('#data-2').val();
    if(jQuery.trim(data) == ''){
        alert('Fill the quote field first.');
        $button.removeAttr('disabled').html('Add');
        return false;
    }
    if(jQuery.trim(data2) == ''){
        alert('Fill the "quote by" field first.');
        $button.removeAttr('disabled').html('Add');
        return false;
    }
    $('#favquote-loader').show();
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: 'data_id=' + data_id + '&termname_id=' + termname_id + '&data=' + data + '||' + data2,
        cache: false,
        success: function(data){
            $form.parent().parent().parent().parent().slideUp(500);
            $('.editinfo, .deleteinfo').css('visibility', 'visible');
            setTimeout(favquote_ajax, 600);
        }
    });
    return false;
});

// contact widget
var contact_ajax = function(){
    $.ajax({
        url: SITE_URL + "user/get_profile_data/contact/",
        type: 'POST',
        data: 'user_id=' + UID,
        cache: false,
        success: function(data){
            $('#contact').html(data);
            $('#contact').children('section').slideDown(500);
        }
    });
};
contact_ajax();

$('#add-contact-form .postbutton').live('click', function(){
    $form = $(this).parent();
    $button = $(this);
    $(this).html('Adding..').attr('disabled', 'disabled');
    var termname_id = $form.children('#termname_id').val();
    var data = $form.children('#data').val();
    if(jQuery.trim(data) == ''){
        alert('Fill the quote field first.');
        $button.removeAttr('disabled').html('Add');
        return false;
    }
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: 'termname_id=' + termname_id + '&data=' + data,
        cache: false,
        success: function(data){
            $('#contact-loader').show();
            $form.parent().parent().slideUp(500);
            setTimeout(contact_ajax, 600);
        }
    });
    return false;
});
$('#edit-contact-form .postbutton').live('click', function(){
    $form = $(this).parent();
    $button = $(this);
    $(this).html('Updating..').attr('disabled', 'disabled');
    var termname_id = $form.children('#termname_id').val();
    var data_id = $form.children('#data_id').val();
    var data = $form.children('#data').val();
    if(jQuery.trim(data) == ''){
        alert('Fill the quote field first.');
        $button.removeAttr('disabled').html('Add');
        return false;
    }
    $('#contact-loader').show();
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: 'termname_id=' + termname_id + '&data=' + data + '&data_id=' + data_id,
        cache: false,
        success: function(data){
            $form.parent().parent().parent().slideUp(500);
            $('.editinfo, .deleteinfo').css('visibility', 'visible');
            setTimeout(contact_ajax, 600);
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
