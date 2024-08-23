<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-prueba</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Pre-prueba</h1>
        <div id="session-timer" style="position: fixed; top: 10px; right: 10px; font-size: 16px;"></div>
        <div class="instructions-text">
            <p>A continuación va a realizar un par de lanzamientos de prueba para que se familiarice con el ejercicio que debe realizar. Al finalizar los lanzamientos, se le presentará el cuestionario que debe responder. Tenga en cuenta que estos lanzamientos y encuesta no hacen parte de ninguna serie.</p>
        </div>
        <div class="button-container">
            <button onclick="location.href='{{ route('pre_launch_1') }}'">Continuar</button>
        </div>
    </div>
    <script src="{{ asset('js/sessionTimer.js') }}"></script>
</body>
</html>
