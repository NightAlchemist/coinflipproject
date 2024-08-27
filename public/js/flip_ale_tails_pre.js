jQuery(document).ready(function($){
    function lanzarMoneda() {
        $('#coin').removeClass();
        setTimeout(function(){
            $('#coin').addClass('tails');
            setTimeout(function() {
                if (userChoice === 'tails') {
                    alert('¡Correcto! Es cruz.');
                } else {
                    alert('¡Incorrecto! Es cruz.');
                }
                $('#continue-btn').show();
            }, 3000);
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
        window.location.href = cuestionarioPrepruebaUrl;
    });
});
