<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje por Hora</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e3f2fd; /* Light Blue */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #424242;
        }
        .message-box {
            background-color: #ffffff;
            padding: 30px 50px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 450px;
            animation: fadeIn 1s ease-out;
            border-left: 8px solid #2196F3; /* Blue accent */
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h2 {
            color: #1976D2; /* Darker Blue */
            font-size: 3.5em;
            margin-bottom: 10px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.08);
        }
        p {
            font-size: 1.2em;
            margin-top: 15px;
            color: #616161;
        }
        .time-info {
            font-size: 0.9em;
            color: #9e9e9e;
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h2>{{ $mensaje }}</h2>
        <p>
            ¡Te deseamos un excelente {{ strtolower(explode(' ', $mensaje)[1] ?? 'momento') }}!
        </p>
        <p class="time-info">
            Este mensaje se adapta a la hora actual.
        </p>
    </div>
</body>
</html>