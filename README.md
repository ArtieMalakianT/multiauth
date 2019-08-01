# multiauth
Multiauth with Laravel

Download Adminlte and move to "assets"
Download KCFinder and move to "assets/bower_components/ckeditor/plugins"

change KCFinder config (disable => false)
Add to CKedtiro/config.js
CKEDITOR.editorConfig = function( config )
{
   config.filebrowserBrowseUrl = '/assets/bower_components/ckeditor/plugins/kcfinder/browse.php?type=files'; 
	config.filebrowserImageBrowseUrl = '/assets/bower_components/ckeditor/plugins/kcfinder/browse.php?type=images'; 
	config.filebrowserFlashBrowseUrl = '/assets/bower_components/ckeditor/plugins/kcfinder/browse.php?type=flash'; 
	config.filebrowserUploadUrl = '/assets/bower_components/ckeditor/plugins/kcfinder/upload.php?type=files'; 
	config.filebrowserImageUploadUrl = '/assets/bower_components/ckeditor/plugins/kcfinder/upload.php?type=images'; 
	config.filebrowserFlashUploadUrl = '/assets/bower_components/ckeditor/plugins/kcfinder/upload.php?type=flash';
};
