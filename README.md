# multiauth
Multiauth with Laravel

php artisan key:generate //Gerar chave do aplicativo
php artisan migrate // Cria as tabelas do banco de dados
php artisan db:seed //Semear banco de dados com informações pré definidas
php artisan storage:link //Cria um link para a pasta Storage e a torna pública

Download CKFinder and move to "assets/bower_components/ckeditor/plugins"
Download Adminlte and move to "assets"
Download new FontAwesome and move to "assets/bower_components/..."

change CKFinder config (disable => false)
Add to CKedtiro/config.js
config.filebrowserBrowseUrl = 'https://likeschool.com.br/assets/bower_components/ckeditor/plugins/ckfinder/ckfinder.html',
	config.filebrowserImageBrowseUrl = 'https://likeschool.com.br/assets/bower_components/ckeditor/plugins/ckfinder/ckfinder.html?type=Images',
	config.filebrowserFlashBrowseUrl = 'https://likeschool.com.br/assets/bower_components/ckeditor/plugins/ckfinder/ckfinder.html?type=Flash',
	config.filebrowserUploadUrl = 'https://likeschool.com.br/bower_components/ckeditor/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	config.filebrowserImageUploadUrl = 'https://likeschool.com.br/assets/bower_components/ckeditor/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	config.filebrowserFlashUploadUrl = 'https://likeschool.com.br/assets/bower_components/ckeditor/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

ADD to env. to fix mail errors -> 
MAIL_FROM_ADDRESS=contato@likeschool.com.br
MAIL_FROM_NAME="contato@likeschool.com.br"
<-
