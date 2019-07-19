# multiauth
Multiauth with Laravel

Download Adminlte and move to "assets"
Download KCFinder and move to "assets/bower_components/ckeditor/plugins"

change KCFinder config (disable => false)
Add to CKedtiro/config.js
CKEDITOR.editorConfig = function( config )
{
   config.filebrowserBrowseUrl = '/js/kcfinder/browse.php?type=files';
   config.filebrowserImageBrowseUrl = '/js/kcfinder/browse.php?type=images';
   config.filebrowserFlashBrowseUrl = '/js/kcfinder/browse.php?type=flash';
   config.filebrowserUploadUrl = '/js/kcfinder/upload.php?type=files';
   config.filebrowserImageUploadUrl = '/js/kcfinder/upload.php?type=images';
   config.filebrowserFlashUploadUrl = '/js/kcfinder/upload.php?type=flash';
};
