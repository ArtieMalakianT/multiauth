# multiauth
Multiauth with Laravel

php artisan key:generate //Gerar chave do aplicativo
php artisan migrate // Cria as tabelas do banco de dados
php artisan db:seed //Semear banco de dados com informações pré definidas
php artisan storage:link //Cria um link para a pasta Storage e a torna pública

Download KCFinder and move to "assets/bower_components/ckeditor/plugins"
Download Adminlte and move to "assets"
Download new FontAwesome and move to "assets/bower_components/..."

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
