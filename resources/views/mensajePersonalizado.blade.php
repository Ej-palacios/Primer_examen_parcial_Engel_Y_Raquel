<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Personalizado</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f8ff; /* Alice Blue */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #333;
        }
        .card {
            background-color: #ffffff;
            padding: 40px 60px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            transform: translateY(0);
            transition: transform 0.3s ease-in-out;
            border-top: 5px solid #4CAF50; /* Green accent */
        }
        .card:hover {
            transform: translateY(-5px);
        }
        h1 {
            color: #2e7d32; /* Darker Green */
            font-size: 3em;
            margin-bottom: 15px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.05);
        }
        p {
            font-size: 1.3em;
            line-height: 1.6;
        }
        strong {
            color: #1976d2; /* Blue */
            font-weight: 700;
        }
        .signature {
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>¡Hola, <strong>{{ $nombre }}</strong>!</h1>
        <p>
            ¡Bienvenido/a a nuestra página! Nos alegra mucho tenerte aquí.
            Esperamos que disfrutes tu visita.
        </p>
        <p class="signature">Saludos cordiales desde Laravel.</p>
    </div>
</body>
</html>