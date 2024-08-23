<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fin de la pre-prueba</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div id="session-timer" style="position: fixed; top: 10px; right: 10px; font-size: 16px;"></div>
        <h1>Fin de la pre-prueba</h1>
        <p>A partir de este momento va a iniciar la prueba real. Recuerde que cada lanzamiento virtual tiene la misma probabilidad de que resulte cara o cruz, como si fuera el lanzamiento de una moneda real.</p>
        <div class="button-container">
            <button type="button" onclick="location.href='{{ route('serie_1_lanzamiento_1') }}'">Comenzar Serie 1</button>
        </div>
    </div>
    <script src="{{ asset('js/sessionTimer.js') }}"></script>
</body>
</html>
