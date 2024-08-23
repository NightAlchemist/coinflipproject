<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fin de la prueba</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div id="session-timer" style="position: fixed; top: 10px; right: 10px; font-size: 16px;"></div>
        <h1>Fin de la prueba</h1>
        <p class="end-message">
            Muchas gracias por participar. Agradecemos su tiempo y disposición para realizar este ejercicio. Le pedimos por favor que no divulgue sobre su desempeño ni sobre qué debe hacer en esta prueba. 
            <br> Si tiene dudas, preguntas, inquietudes o quejas sobre este experimento, puede contactar a los investigadores a cargo de este experimento:
            <br> 
            Christian David Sánchez Olarte – christian.sanchezo@uaem.edu.mx
            <br>
            Jorge Pablo Oseguera Gamba - jorge.oseguera@uaem.mx.
        </p>
        <p class="end-message">
            Si está interesado en recibir los resultados y/o tomar el taller, haga click a continuar. De lo contrario, haga click en finalizar.
        </p>
        <div class="button-container">
            <a href="{{ route('end') }}"><button>Finalizar</button></a>
            <a href="{{ route('res_work') }}"><button>Continuar</button></a>
        </div>
    </div>
    <script src="{{ asset('js/sessionTimer.js') }}"></script>
</body>
</html>
