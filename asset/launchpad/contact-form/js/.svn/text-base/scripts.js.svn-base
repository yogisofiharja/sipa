jQuery(document).ready(function($) {
	$('form.iphorm').iPhorm();
	
	// Tooltip settings
	if ($.isFunction($.fn.qtip)) {
		$('.iphorm-tooltip').qtip({
			content: {
				text: false
			},
			style: {
				tip: 'bottomLeft',
				name: 'light',
				border: {
					radius: 5,
					width: 2,
					color: '#3b3b3b'
				},
				backgroundColor: '#e9e9e9',
				color: '#292929',
				padding: 5,
				lineHeight: '17px',
				fontSize: '11px',
				fontWeight: '800'
			},
			position: {
				corner: {
					target: 'rightTop',
					tooltip: 'bottomLeft'
				}
			}
		});
	}
	
	// Changes subject to a text field when 'Other' is chosen
	var subjectHtml = $('.subject-input-wrapper').html();	
	$('#subject').live('change', function () {		
		if ($(this).val() == 'Other') {
			$('.subject-input-wrapper').empty();
			newHtml = $('<input name="subject" type="text" id="subject" value="" />');
			$('.subject-input-wrapper').html(newHtml);
			$cancelOther = $('<a>').click(function () {
				$('.subject-input-wrapper').empty();
				$('.subject-input-wrapper').append(subjectHtml);
				$(this).remove();
				return false;
			}).attr('href', '#').addClass('cancel-button').attr('title', 'Cancel');
			newHtml.after($cancelOther);
		}
	});
}); // End document ready

//Image preloader
var images = new Array(
	'contact-form/images/close.png',
	'contact-form/images/success.png'
);
var imageObjs = new Array();
for (var i in images) {
	imageObjs[i] = new Image();
	imageObjs[i].src = images[i];
}