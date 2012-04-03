<html>
	<head>
		<title>Uploadify</title>
		<link rel="stylesheet" type="text/css" href="uploadify.css" />
	<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript" src="jquery.uploadify.js"></script>
<script type="text/javascript">
// <![CDATA[
$(document).ready(function() {
  $('#file_upload').uploadify({
    'swf'  : 'uploadify.swf',
    'uploader'    : 'uploadify.php',
    'cancelImage' : 'cancel.png',
    'buttonImage' : 'box_upload_48.png',
    'fileSizeLimit'   : 5000000,
	'fileTypeDesc'    : 'Some Image Files (*.jpg)',
	'fileTypeExts'    : '*.jpg',
    'height'	: 48,
    'width'		: 48,
    'multi'		: true,
    'scriptData': {'album_id':5},
    'auto'      : true,
    'onUploadComplete': function(file){
		$('#hasil').append('<img src="uploads/' + file.name +'" />');
	}
  });
});
function tampilin(file){
	
}
// ]]>
</script>
	</head>
	<body>
		<input id="file_upload" type="file" name="file_upload" />
		<button onclick="$('#file_upload').uploadifyUpload()">Begin Upload</button>
		<div id="hasil"></div>
	</body>
</html>
