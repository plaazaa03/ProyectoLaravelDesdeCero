<!DOCTYPE html>
<html>

<head>
    <title>Crear Coche</title>
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset('css/crearCoche.css') }}'>
</head>

<body>
    <h1>Crear Coche</h1>
    <form method="post" action={{ route('guardarCoche') }}>
        <!-- token de seguridad -->
        @csrf
        <input type="text" name="marca" placeholder="marca" required>
        <input type="text" name="color" placeholder="color" required>
        <input type="submit" value="Crear">
    </form>
</body>

</html>