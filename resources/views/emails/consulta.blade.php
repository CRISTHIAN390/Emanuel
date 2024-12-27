<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Recibida</title>
</head>
<body>
    <h1 style="color: #333; font-size: 24px;">Nueva Consulta Recibida</h1>
    <p><strong>Nombre:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $details['message'] }}</p>
</body>
</html>
