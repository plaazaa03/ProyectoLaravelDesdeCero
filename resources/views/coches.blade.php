<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset('css/index.css') }}'>
</head>

<body>
    <h1>Listados de los coches</h1>
    <form method="GET" action={{ route('index') }}>
        <input type="text" name="marca" placeholder="Filtrado por marca">
        <input type="submit" value="Filtrar">
    </form>
    <div>
        @foreach ($coches as $coche)
            <p>{{ $coche->id }} - {{ $coche->marca }} - {{ $coche->color }}</p>
            <button><a href="{{ route('editarCoche', ['id' => $coche->id]) }}">Editar</a></button>
            <button><a href="{{ route('eliminarCoche', ['id' => $coche->id]) }}">Eliminar</a></button>
        @endforeach
        <button><a href="{{ route('crearCoche') }}">Crear coche</a></button>
    </div>


</body>

</html>