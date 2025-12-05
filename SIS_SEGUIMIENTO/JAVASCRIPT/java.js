// Validación nativa y mostrar nombre seleccionado
window.addEventListener('DOMContentLoaded', function() {
    // Validación simple al enviar
    var form = document.querySelector('form[action="adicion2.php"]');
    if(form) {
        form.addEventListener('submit', function(e) {
            var selects = form.querySelectorAll('select');
            var vacio = false;
            selects.forEach(function(sel) {
                if(!sel.value) vacio = true;
            });
            var fecha = form.querySelector('input[name="fecha"]').value;
            var hora = form.querySelector('input[name="hora"]').value;
            if(vacio || !fecha || !hora) {
                alert('Por favor, complete todos los campos.');
                e.preventDefault();
            }
        });
    }

    // Mostrar nombre seleccionado para chofer
    var choferSel = document.querySelector('select[name="idchofer"]');
    var choferOut = document.getElementById('nombre_chofer');
    if(choferSel && choferOut) {
        choferSel.addEventListener('change', function() {
            var txt = choferSel.options[choferSel.selectedIndex].text;
            choferOut.textContent = txt !== '-- Elige un Chofer --' ? 'Nombre seleccionado: ' + txt : '';
        });
    }
    // Mostrar nombre seleccionado para vehículo
    var vehiculoSel = document.querySelector('select[name="idvehiculo"]');
    var vehiculoOut = document.getElementById('nombre_vehiculo');
    if(vehiculoSel && vehiculoOut) {
        vehiculoSel.addEventListener('change', function() {
            var txt = vehiculoSel.options[vehiculoSel.selectedIndex].text;
            vehiculoOut.textContent = txt !== '-- Elige un Vehículo --' ? 'Vehículo seleccionado: ' + txt : '';
        });
    }
    // Mostrar nombre seleccionado para parada
    var paradaSel = document.querySelector('select[name="idparada"]');
    var paradaOut = document.getElementById('nombre_parada');
    if(paradaSel && paradaOut) {
        paradaSel.addEventListener('change', function() {
            var txt = paradaSel.options[paradaSel.selectedIndex].text;
            paradaOut.textContent = txt !== '-- Elige una Parada --' ? 'Parada seleccionada: ' + txt : '';
        });
    }
});
