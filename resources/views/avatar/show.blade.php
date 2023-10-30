<!DOCTYPE html>
<html>
<head>
    <title>Imagen del Avatar</title>
</head>
<body>
    <h1>Avatar</h1>
    <p>Nombre del archivo: {{ $nombre_archivo }}</p>
    <img src="data:{{ $tipo_archivo }};base64,{{ base64_encode($datos_imagen) }}" alt="Avatar">
</body>
</html>