<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Nuevo registro</h1>
    <form action="{{ route('libros.store') }}" method="post">
        @csrf
        <label for="">Nombre</label>
        <br>
        <input type="text" name="nombre">
        <br><br>
        <label for="">Autor</label>
        <br>
        <input type="text" name="autor">
        <br><br>
        <label for="">Editorial</label>
        <br>
        <input type="text" name="editorial">
        <br><br>
        <label for="">Descripción</label>
        <br>
        <input type="text" name="descripcion">
        <br><br>
        <label for="">Precio</label>
        <br>
        <input type="number" name="precio">
        <br><br>
        <label for="">Disponible</label>
        <br>
        <select name="disponible">
            <option value="yes">Si</option>
            <option value="no">No</option>
        </select>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
    <br><br>
    <button><a href="{{ route('libros.index') }}">Volver a inicio</a></button>
</body>
</html>