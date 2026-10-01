<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Editar</h1>
    <form action="{{ route('libros.update', $libro->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nombre</label>
        <br>
        <input type="text" name="nombre" value="{{ $libro->nombre }}">
        <br><br>
        <label for="">Autor</label>
        <br>
        <input type="text" name="autor" value="{{ $libro->autor }}">
        <br><br>
        <label for="">Editorial</label>
        <br>
        <input type="text" name="editorial" value="{{ $libro->editorial }}">
        <br><br>
        <label for="">Descripción</label>
        <br>
        <input type="text" name="descripcion" value="{{ $libro->descripcion }}">
        <br><br>
        <label for="">Precio</label>
        <br>
        <input type="number" name="precio" value="{{ $libro->precio }}">
        <br><br>
        <label for="">Disponible</label>
        <br>
        <select name="disponible">
            <option value="yes" {{ $libro->disponible == 'yes' ? 'selected' : '' }}>Si</option>
            <option value="no" {{ $libro->disponible == 'no' ? 'selected' : '' }}>No</option>
        </select>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
    <br><br>
    <button><a href="{{ route('libros.index') }}">Volver a inicio</a></button>
</body>
</html>