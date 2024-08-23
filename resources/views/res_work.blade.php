<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados y Taller</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div id="session-timer" style="position: fixed; top: 10px; right: 10px; font-size: 16px;"></div>
        <h1>Resultados y Taller</h1>
        <form action="{{ route('guardar_res_work') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">¿Está usted interesado en los resultados del estudio?</label>
                <div class="radio-buttons">
                    <label><input type="radio" name="interes_resultados" value="sí" required> Sí</label>
                    <label><input type="radio" name="interes_resultados" value="no" required> No</label>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">¿Quisiera usted inscribirse al taller sobre heurísticas, falacias y sesgos cognitivos?</label>
                <div class="radio-buttons">
                    <label><input type="radio" name="inscripcion_taller" value="sí" required> Sí</label>
                    <label><input type="radio" name="inscripcion_taller" value="no" required> No</label>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Correo: (Nota: no habrá manera de vincular sus resultados con su correo)</label>
                <input type="email" name="correo" required>
            </div>
            <button type="submit" class="submit-button">Finalizar</button>
        </form>
    </div>
    <script src="{{ asset('js/sessionTimer.js') }}"></script>
</body>
</html>
