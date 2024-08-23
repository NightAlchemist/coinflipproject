<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie 5 - Lanzamiento 1</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div id="session-timer" style="position: fixed; top: 10px; right: 10px; font-size: 16px;"></div>
        <h1>Serie 5 - Lanzamiento 1</h1>
        <p>Por favor prediga el lado de la moneda que va a resultar, si cara o cruz.</p>
        <div id="coin">
            <div class="side-a">
                <img src="{{ asset('img/heads.png') }}" alt="Cara">
            </div>
            <div class="side-b">
                <img src="{{ asset('img/tails.png') }}" alt="Cruz">
            </div>
        </div>
        <div class="button-container">
            <button id="btn-heads">Cara</button>
            <button id="btn-tails">Cruz</button>
        </div>
        <div id="result"></div>
        <button id="continue-btn" style="display:none;">Continuar</button>
    </div>
    <form id="lanzamiento-form" style="display: none;">
        @csrf
        <input type="hidden" name="consentimiento_id" value="{{ $consentimiento_id }}">
        <input type="hidden" name="serie" value="5">
        <input type="hidden" name="eleccion" id="eleccion">
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var nextUrl = "{{ route('serie_5_lanzamiento_2') }}";
    </script>
    <script src="{{ asset('js/alw_right.js') }}"></script>
    <script src="{{ asset('js/sessionTimer.js') }}"></script>
</body>
</html>