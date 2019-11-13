@extends('layouts.home-menu')
@section('titulo')
Like School | Galerias
@endsection

@section('head')
    <link type="text/css" rel="stylesheet" href="/assets/galleria/dist/themes/twelve/galleria.twelve.js">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>   
    <script src="/assets/galleria/dist/galleria.js"></script>
    <style>    
        .galleria
        { 
            height: 400px; 
            margin: 20px auto;
            background: #fff;
        }
    </style>
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
    $(document).ready(function(){
        $('.fixed-action-btn').floatingActionButton(); 
    });
        (function() 
        {
        Galleria.loadTheme('/assets/galleria/dist/themes/twelve/galleria.twelve.js');
        $('#gallery').galleria({        
        });
        }());
    </script>
    @endsection