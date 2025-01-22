<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h1>Crear Coche</h1>
    <form method="post" action= {{ route('guardarCoche') }} >
        <!-- token de seguridad -->
        @csrf
        <input type="text" name="marca" placeholder="marca">
        <input type="text" name="color" placeholder="color">
        <input type="submit" value="Crear">
    </form>
</body>
</html>