<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario pre-prueba</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div id="session-timer" style="position: fixed; top: 10px; right: 10px; font-size: 16px;"></div>
        <h1>Cuestionario pre-prueba</h1>
        <form action="#" method="post">
            <div class="question">
                <p>1. Imagine que tiene que hacer otro lanzamiento de la serie que acaba de realizar. La siguiente predicción usted cree que va a:</p>
                <label><input type="radio" name="prediction" value="acertar"> Acertar</label>
                <label><input type="radio" name="prediction" value="errar"> Errar</label>
            </div>
            <div class="question">
                <p>2. Considerando la predicción que acaba de hacer, es decir, de si acertaría o erraría la predicción de un hipotético siguiente lanzamiento. ¿De 1 a 7 (siendo 1 que no tendría nada de confianza y 7 total de confianza), con qué nivel de confianza predeciría el siguiente lanzamiento? Indique:</p>
                @for ($i = 1; $i <= 7; $i++)
                    <label><input type="radio" name="confidence" value="{{ $i }}"> {{ $i }}</label>
                @endfor
            </div>
            <div class="question">
                <p>A continuación, se le presentará una pregunta, basándose en sus decisiones y razonamiento al momento de tomar la decisión. Responda con sinceridad y por favor explique el motivo de su respuesta. Tenga en cuenta que no hay respuestas correctas o incorrectas.</p>
                <label for="reasoning">¿Cuál fue el razonamiento o motivo por el cual predice ese resultado?</label>
                <textarea id="reasoning" name="reasoning" rows="4" cols="50"></textarea>
            </div>
            <div class="button-container">
                <button type="button" onclick="location.href='{{ route('fin_preprueba') }}'">Continuar</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/sessionTimer.js') }}"></script>
</body>
</html>
