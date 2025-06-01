<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Repetido</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #fce4ec; /* Light Pink */
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Align from top */
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 30px 20px;
            color: #4a148c; /* Dark Purple */
        }
        .header-section {
            text-align: center;
            margin-bottom: 30px;
            background-color: #e1bee7; /* Medium Pink-Purple */
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }
        h1 {
            color: #6a1b9a; /* Deep Purple */
            font-size: 2.8em;
            margin-bottom: 10px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.05);
        }
        p.info {
            font-size: 1.1em;
            color: #4a148c;
        }
        .saludo-list-container {
            width: 90%;
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Ensures border-radius applies to children */
        }
        .saludo-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            max-height: 400px; /* Limit height for scroll */
            overflow-y: auto; /* Enable scrolling */
        }
        .saludo-list li {
            padding: 15px 25px;
            border-bottom: 1px solid #f3e5f5; /* Lighter Pink-Purple */
            font-size: 1.2em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #880e4f; /* Darker Pink */
            transition: background-color 0.2s ease;
        }
        .saludo-list li:last-child {
            border-bottom: none;
        }
        .saludo-list li:nth-child(odd) {
            background-color: #f8bbd0; /* Even Lighter Pink */
        }
        .saludo-list li:hover {
            background-color: #e91e63; /* Medium Pink */
            color: white;
        }
        .saludo-list li span.count {
            font-weight: bold;
            color: #c2185b; /* Accent Pink */
            background-color: #fff;
            padding: 4px 8px;
            border-radius: 5px;
            font-size: 0.8em;
        }
        .saludo-list li:hover span.count {
            color: #e91e63; /* Match hover background */
        }
        .footer-note {
            margin-top: 30px;
            font-size: 0.9em;
            color: #9c27b0; /* Purple */
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header-section">
        <h1>¡Saludos Repetidos!</h1>
        <p class="info">Hemos generado <strong>{{ $veces }}</strong> saludos para ti.</p>
    </div>
    
    <div class="saludo-list-container">
        <ul class="saludo-list">
            @for ($i = 0; $i < $veces; $i++)
                <li>
                    {{ $saludo }}
                    <span class="count">#{{ $i + 1 }}</span>
                </li>
            @endfor
        </ul>
    </div>

    <p class="footer-note">¡Esperamos que todos estos saludos te alegren el día!</p>
</body>
</html>