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
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>