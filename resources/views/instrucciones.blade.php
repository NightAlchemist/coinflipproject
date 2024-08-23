<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrucciones</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div id="session-timer" style="position: fixed; top: 10px; right: 10px; font-size: 16px;"></div>
        <h1>Instrucciones</h1>
        <div class="instructions-text">
            <p>El ejercicio es un juego de predicción computarizado, en el que el computador “lanza” una moneda virtual, las probabilidades que resulte en “cara” o “cruz” tienen la misma probabilidad como si ocurriera en la vida real, de tal manera, serán aleatorios los resultados.</p>
            <p>Se realizarán 12 series de lanzamientos. Antes de cada lanzamiento, usted debe elegir si va a resultar “cara” o “cruz”. Una vez lo elija, se hará el lanzamiento virtual.</p>
            <p>Cuando se haga el lanzamiento virtual, el sistema le mostrará si acertó o erró en su predicción, dando la oportunidad de seguir lanzando la moneda y prediciendo el resultado hasta que acabe la serie.</p>
            <p>Una vez acabada cada serie, tendrá que responder que, si en dado caso de tener una opción de hacer un lanzamiento extra, creen que van a acertar o errar en su predicción del resultado.</p>
            <p>Así mismo, al finalizar cada serie deben responder de 1 a 7 (1 es no tendría nada de seguridad y 7 total de seguridad) la seguridad que tienen respecto a su predicción. Así como también que escriban el razonamiento que usaron para tomar dicha decisión de predicción.</p>
        </div>
        <div class="button-container">
            <button onclick="location.href='{{ route('preprueba') }}'">Continuar</button>
        </div>
    </div>
    <script src="{{ asset('js/sessionTimer.js') }}"></script>
</body>
</html>
