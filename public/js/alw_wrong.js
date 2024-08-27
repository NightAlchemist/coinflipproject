jQuery(document).ready(function($){
    function lanzarMoneda() {
        $('#coin').removeClass();
        setTimeout(function(){
            if (userChoice === 'heads') {
                $('#coin').addClass('tails');
                setTimeout(function() {
                    alert('¡Incorrecto! Es cruz.');
                    $('#continue-btn').show();
                }, 3000); // Tiempo de la animación de la moneda
            } else {
                $('#coin').addClass('heads');
                setTimeout(function() {
                    alert('¡Incorrecto! Es cara.');
                    $('#continue-btn').show();
                }, 3000); // Tiempo de la animación de la moneda
            }
        }, 100);
    }

    var userChoice = '';
    $('#btn-heads').on('click', function(){
        userChoice = 'heads';
        $('#eleccion').val('cara');
        deshabilitarBotones();
        lanzarMoneda();
    });

    $('#btn-tails').on('click', function(){
        userChoice = 'tails';
        $('#eleccion').val('cruz');
        deshabilitarBotones();
        lanzarMoneda();
    });

    function deshabilitarBotones() {
        $('#btn-heads').prop('disabled', true);
        $('#btn-tails').prop('disabled', true);
    }

    $('#continue-btn').on('click', function(){
        window.location.href = nextUrl;
    });
});
