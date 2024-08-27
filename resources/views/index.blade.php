<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consentimiento Informado</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="content">
        <div id="session-timer" style="position: fixed; top: 10px; right: 10px; font-size: 16px;"></div>
        <h1>Consentimiento Informado</h1>
        <p>La presente investigación tiene como objetivo comprender las atribuciones que tienen las personas al momento de tomar una decisión, así mismo, estudiando como una serie de eventos aleatorios afecta la confianza de predicción de resultados.
        Con el fin de obtener los efectos de la investigación, usted ha sido invitado a participar de la misma, para ello lea este consentimiento informado de forma cuidadosa.
        Su participación es estrictamente voluntaria. Si usted acepta a participar en esta investigación, se le pedirá responder una prueba en donde se plantea un escenario, en el cual tendrá que elegir cuál sería la opción que usted tomaría. Si desea, puede abandonar la prueba en cualquier momento y cuando lo considere necesario sin temor a ninguna retaliación o afectación. La información y datos recogidos por medio de la prueba serán confidenciales y únicamente se utilizarán para esta investigación. La participación no tiene ningún tipo de remuneración económica o de especie. Como beneficio se les ofrecerá al finalizar el experimento, la opción de inscribirse a un taller sobre las heurísticas, falacias y demás sesgos cognitivos involucrados en la toma de decisiones, para mejorar sus habilidades de razonamiento. Adicional, se les ofrecerá conocer los resultados finales del estudio. Una vez terminado el experimento, se brindarán los correos electrónicos de los investigadores para que se contacten, en caso de estar interesados en los resultados o el taller. Si usted tiene alguna inquietud con respecto al manejo de los datos o a cualquier otro asunto expuesto, le invitamos a que realice sus preguntas. Al finalizar el estudio, se le enviarán por correo electrónico los resultados del trabajo y motivo del estudio.
        Agradecemos de antemano su participación.</p>
        
        <form action="{{ route('consentimiento.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label" for="nombres_y_apellidos">Nombres y Apellidos</label>
                <input type="text" id="nombres_y_apellidos" name="nombres_y_apellidos" required>
            </div>
            <div class="form-group radio-buttons">
                <label class="form-label">Acepta</label>
                <label for="acepta-si">Sí</label>
                <input type="radio" id="acepta-si" name="acepta" value="si" required>
                <label for="acepta-no">No</label>
                <input type="radio" id="acepta-no" name="acepta" value="no" required>
            </div>
            <button type="submit" class="submit-button">Continuar</button>
        </form>
    </div>

    <footer class="footer">
        <div class="logo-container">
            <img src="{{ asset('img/logo_cincco.jpeg') }}" alt="Logo Cincco" class="logo1">
            <img src="{{ asset('img/logo_uaem.jpeg') }}" alt="Logo UAEM" class="logo2">
        </div>
    </footer>
    <script src="{{ asset('js/sessionTimer.js') }}"></script>
</body>
</html>
