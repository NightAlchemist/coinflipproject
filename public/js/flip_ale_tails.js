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
            }, 3000); // Tiempo de la animación de la moneda
        }, 100);
    }

    var userChoice = '';
    $('#btn-heads').on('click', function(){
        userChoice = 'heads';
        $('#eleccion').val('cara');
        enviarFormulario();
        lanzarMoneda();
    });

    $('#btn-tails').on('click', function(){
        userChoice = 'tails';
        $('#eleccion').val('cruz');
        enviarFormulario();
        lanzarMoneda();
    });

    function enviarFormulario() {
        $.ajax({
            url: "{{ route('lanzamientoB') }}", // Cambia esto si la ruta es diferente
            method: 'POST',
            data: $('#lanzamiento-form').serialize(),
            success: function(response) {
                console.log('Lanzamiento guardado correctamente.');
            },
            error: function(xhr) {
                console.log('Error al guardar el lanzamiento.');
                console.log(xhr.responseText); // Mostrar el mensaje de error en la consola
            }
        });
    }

    $('#continue-btn').on('click', function(){
        window.location.href = nextUrl;
    });
});
