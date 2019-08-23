@extends('layouts.home-menu')
@section('titulo')
Like School | Galerias
@endsection

@section('head')
    <link type="text/css" rel="stylesheet" href="/assets/galleria/dist/themes/fullscreen/galleria.fullscreen.js">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>   
    <script src="/assets/galleria/dist/galleria.js"></script>
@endsection

@section('conteudo')        

<div class="container">
    <div class="galleria" id="gallery">
        @foreach($fotos as $foto)
            <img src="{{Storage::url($foto)}}">          
        @endforeach      
    </div>
</div>
    
@endsection

    @section('script')
    <script type="text/javascript">
        (function() 
        {
        Galleria.loadTheme('/assets/galleria/dist/themes/fullscreen/galleria.fullscreen.js');
        $('#gallery').galleria({
        width: 700,
        height: 467 //--I made heights match
        });
        }());
    </script>
    @endsection