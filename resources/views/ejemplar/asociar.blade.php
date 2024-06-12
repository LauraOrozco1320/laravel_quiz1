<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola desde asociar:</h1>

    <form action="{{route('ejemplar.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
    

        <br>
        <h1>Usuario:</h1>
        <select name="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->name}}</option>
            @endforeach
        </select>
        <br>
        <h1>Ejemplar:</h1>    
        <select name="copy_id">
            @foreach($copies as $copy)
                <option value="{{ $copy->id }}">{{ $copy->id }} - {{ $copy->location }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>
 
</body>
</html>