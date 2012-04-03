var loadPhoto = function(url){
    if(jQuery.trim(url) == '')
        url = document.location;
    $('#photo-loader').show();
    $('#canvas').css('opacity', 0.4);
    $.ajax({
        url: url,
        type: 'post',
        data: 'ajaxin=true',
        cache: false,
        success: function(data){
            var ajax = jQuery.parseJSON(data);
            $('#canvas').html(ajax.canvas);
            $('#photoDesc').html(ajax.desc);
            $('a#next, a#prev').css('height', $('#canvas').height()-10);
            $('#photo-loader').hide();
            $('#canvas').css('opacity', 1);
        }
    });
};
loadPhoto();

$('.ajaxy#next, .ajaxy#prev').live('click',  function(e){
    $this = $(this);
    var url = $this.attr('href');
    
    // Check Location
    if ( document.location.protocol === 'file:' ) {
        alert('The HTML5 History API (and thus History.js) do not work on files, please upload it to a server.');
    }

    // Establish Variables
    var
    History = window.History, // Note: We are using a capital H instead of a lower h
    State = History.getState();
        
    History.pushState({
        state:1,
        rand:Math.random()
        }, "Detail Foto", url);
    
    loadPhoto(url);
    
    e.preventDefault();
    return false;
});

// Bind to State Change
History.Adapter.bind(window,'statechange',function(){ // Note: We are using statechange instead of popstate
    // Log the State
    var State = History.getState(); // Note: We are using History.getState() instead of event.state
    loadPhoto();
});