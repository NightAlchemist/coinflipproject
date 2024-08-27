jQuery(document).ready(function($){
    function lanzarMoneda() {
        $('#coin').removeClass();
        setTimeout(function(){
            if (userChoice === 'heads') {
                $('#coin').addClass('heads');
                setTimeout(function() {
                    alert('¡Correcto! Es ' + (userChoice === 'heads' ? 'cara' : 'cruz') + '.');
                    $('#continue-btn').show();
                }, 3000); // Tiempo de la animación de la moneda
            } else {
                $('#coin').addClass('tails');
                setTimeout(function() {
                    alert('¡Correcto! Es ' + (userChoice === 'heads' ? 'cara' : 'cruz') + '.');
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
