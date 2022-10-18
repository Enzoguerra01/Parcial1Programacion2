<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Crear Producto</h2>

    <form action="/alta" method="post">@csrf
        Nombre: <input type="text" name="nombre"><br><br>
        Marca: <input type="text" name="marca"><br><br>
        Descripción: <input type="text" name="descripcion"><br><br>
        Stock: <input type="number" name="stock"><br><br>
        <input type="submit" value="Guardar">
    </form>
<hr>
    <h2>Listado Productos</h2>
    <ul>

        @foreach ($productos as $producto)
        <li>
            {{$producto->id}} - {{$producto->nombre}} - {{$producto->marca}} - {{$producto->descripcion}} - {{$producto->stock}} <a href="/baja?id={{ $producto->id }}">Borrar</a>
        </li>
        @endforeach
    </ul>
</body>

</html>