jQuery(document).ready(function($){
    function lanzarMoneda() {
        $('#coin').removeClass();
        setTimeout(function(){
            $('#coin').addClass('heads');
            setTimeout(function() {
                if (userChoice === 'heads') {
                    alert('¡Correcto! Es cara.');
                } else {
                    alert('¡Incorrecto! Es cara.');
                }
                $('#continue-btn').show();
            }, 3000); // Tiempo de la animación de la moneda
        }, 100);
    }

    var userChoice = '';
    $('#btn-heads').on('click', function(){
        userChoice = 'heads';
        lanzarMoneda();
    });

    $('#btn-tails').on('click', function(){
        userChoice = 'tails';
        lanzarMoneda();
    });

    $('#continue-btn').on('click', function(){
        window.location.href = preLaunch2Url;
    });
});
