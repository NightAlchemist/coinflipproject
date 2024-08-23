<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Sociodemográfica</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div id="session-timer" style="position: fixed; top: 10px; right: 10px; font-size: 16px;"></div>
        <h1>Preguntas Sociodemográficas</h1>
        <div id="session-timer" style="position: fixed; top: 10px; right: 10px; font-size: 16px;"></div>
        <form action="{{ route('sociodemografico.store') }}" method="POST">
            @csrf
            <input type="hidden" name="consentimiento_id" value="{{ session('consentimiento_id') }}">
        
            <div class="form-group">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" id="edad" name="edad" required>
            </div>
        
            <div class="form-group">
                <label for="genero" class="form-label">Género:</label>
                <select id="genero" name="genero" required>
                    <option value="" disabled selected>Selecciona tu género</option>
                    <option value="hombre">Hombre</option>
                    <option value="mujer">Mujer</option>
                    <option value="otro">Otro</option>
                    <option value="no-declarado">Prefiero no decir</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="pais" class="form-label">País de Origen:</label>
                <select id="pais" name="pais" required>
                    <option value="" disabled selected>Selecciona tu país</option>
                    <option value="colombiano">Colombiano/a</option>
                    <option value="mexicano">Mexicano/a</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="religion" class="form-label">Creencia Religiosa:</label>
                <select id="religion" name="religion" required>
                    <option value="" disabled selected>Selecciona tu religión</option>
                    <option value="catolicismo">Catolicismo</option>
                    <option value="cristianismo">Cristianismo</option>
                    <option value="islam">Islam</option>
                    <option value="hinduismo">Hinduismo</option>
                    <option value="budismo">Budismo</option>
                    <option value="judaísmo">Judaísmo</option>
                    <option value="otro">Otro</option>
                    <option value="no-declarado">Prefiero no decir</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="nivel_academico" class="form-label">Nivel Académico:</label>
                <select id="nivel_academico" name="nivel_academico" required>
                    <option value="" disabled selected>Selecciona tu nivel académico</option>
                    <option value="preparatoria">Preparatoria/Bachillerato</option>
                    <option value="pregrado">Pregrado/Licenciatura</option>
                    <option value="especializacion">Especialización</option>
                    <option value="maestria">Maestría</option>
                    <option value="doctorado">Doctorado</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="ingresos" class="form-label">Promedio de Ingresos Mensuales (USD):</label>
                <input type="number" id="ingresos" name="ingresos" step="0.01" required>
            </div>
        
            <input type="submit" value="Enviar" class="submit-button">
        </form>
        
    </div>

    <script src="{{ asset('js/nationality.js') }}"></script>
    <script src="{{ asset('js/sessionTimer.js') }}"></script>
</body>
</html>
