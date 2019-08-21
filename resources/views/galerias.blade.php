<!doctype html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="/assets/galleria/dist/themes/classic/galleria.classic.min.js">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>   
        <script src="/assets/galleria/dist/galleria.js"></script>     
    </head>
    <body>
            <div class="galleria" id="gallery">
                <img src="{{Storage::url('/galerias/thumb2.jpg')}}">
                <img src="{{Storage::url('/galerias/thumb.jpg')}}">
            </div>
    </body>
    <script type="text/javascript">
        (function() 
        {
        Galleria.loadTheme('/assets/galleria/dist/themes/classic/galleria.classic.min.js');
        $('#gallery').galleria({
        width: 700,
        height: 467 //--I made heights match
        });
        }());
    </script>
</html>