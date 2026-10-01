<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Nuestro catálogo de libros</h1>
    <br><br>
    <table border=1>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Disponible</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($libros as $libro)
        <tr>
            <td>{{ $libro->nombre }}</td>
            <td>{{ $libro->autor }}</td>
            <td>{{ $libro->editorial }}</td>
            <td>{{ $libro->descripcion }}</td>
            <td>{{ $libro->precio }}</td>
            <td>{{ $libro->disponible }}</td>
            <td><button><a href="{{ route('libros.edit', $libro->id) }}">EDITAR</a></button></td>
            <td>
                <form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Esta seguro de eliminar?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <br><br><br>
    <button><a href="{{ route('libros.create') }}">Registrar nuevo</a></button>
</body>
</html>