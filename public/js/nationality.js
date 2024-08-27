document.addEventListener('DOMContentLoaded', function () {
    var paisSelect = document.getElementById('pais');
    var ingresosLabel = document.querySelector('label[for="ingresos"]');

    function actualizarMoneda() {
        var selectedPais = paisSelect.value;
        switch (selectedPais) {
            case 'colombiano':
                ingresosLabel.textContent = 'Promedio de Ingresos Mensuales (COP):';
                break;
            case 'mexicano':
                ingresosLabel.textContent = 'Promedio de Ingresos Mensuales (MXN):';
                break;
            default:
                ingresosLabel.textContent = 'Promedio de Ingresos Mensuales (USD):';
                break;
        }
    }

    paisSelect.addEventListener('change', actualizarMoneda);

    // Llamar a la función al cargar la página para establecer la moneda correcta
    actualizarMoneda();
});
