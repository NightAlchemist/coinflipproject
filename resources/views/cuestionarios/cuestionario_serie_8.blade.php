<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario Serie 8</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div id="session-timer" style="position: fixed; top: 10px; right: 10px; font-size: 16px;"></div>
        <h1>Cuestionario Serie 8</h1>

        <h2>Total aciertos = 2 / 3</h2>
        
        <form action="{{ route('guardar_cuestionario_serie_8') }}" method="POST">
            @csrf
            <div class="question">
                <p>1. Imagine que tiene que hacer otro lanzamiento de la serie que acaba de realizar. La siguiente predicción usted cree que va a:</p>
                <label><input type="radio" name="prediccion" value="acertar" required> Acertar</label>
                <label><input type="radio" name="prediccion" value="errar" required> Errar</label>
            </div>
            
            <div class="question">
                <p>2. Considerando la predicción que acaba de hacer, es decir, de si acertaría o erraría la predicción de un hipotético siguiente lanzamiento. ¿De 1 a 7 (siendo 1 que no tendría nada de confianza y 7 total de confianza), con qué nivel de confianza predeciría el siguiente lanzamiento? Indique:</p>
                <label><input type="radio" name="nivel_confianza" value="1" required> 1</label>
                <label><input type="radio" name="nivel_confianza" value="2" required> 2</label>
                <label><input type="radio" name="nivel_confianza" value="3" required> 3</label>
                <label><input type="radio" name="nivel_confianza" value="4" required> 4</label>
                <label><input type="radio" name="nivel_confianza" value="5" required> 5</label>
                <label><input type="radio" name="nivel_confianza" value="6" required> 6</label>
                <label><input type="radio" name="nivel_confianza" value="7" required> 7</label>
            </div>
            
            <div class="question">
                <p>A continuación, se le presentará una pregunta, basándose en sus decisiones y razonamiento al momento de tomar la decisión. Responda con sinceridad y por favor explique el motivo de su respuesta. Tenga en cuenta que no hay respuestas correctas o incorrectas.</p>
                <label>¿Cuál fue el razonamiento o motivo por el cual predice ese resultado?</label>
                <textarea name="razonamiento" rows="4" cols="50" required></textarea>
            </div>
            
            <button type="submit">Continuar</button>
        </form>
    </div>
    <script src="{{ asset('js/sessionTimer.js') }}"></script>
</body>
</html>