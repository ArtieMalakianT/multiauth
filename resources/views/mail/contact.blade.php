<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Olá!</p>
        <p>A LikeSchool Recebeu uma mensagem de <strong>{{$name}}</strong>, </p>
        <p>Email: {{$email}}</p>
        @if(!isset($pacote))
        <p>Tenho interesse no curso de {{$pacote}}</p>
        @else
        <p>Mensagem: {{$msg}}</p>
        @endif        
        <p>Telefone: {{$tel}}</p>
        <p></p>
        <p>Att, <br>
        </p>
    </body>
</html>