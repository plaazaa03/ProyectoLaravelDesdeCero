<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h1>Editar Coche</h1>
    <form method="post" action= {{ route('actualizarCoche', $coche->id) }} >
        <!-- token de seguridad -->
        @csrf
        <!-- metodo de envio para actualizar el juego -->
        @method('PUT')
        <input type="text" name="marca" placeholder="marca" required>
        <input type="text" name="color" placeholder="color" required>
        <input type="submit" value="Editar">
    </form>
</body>
</html>