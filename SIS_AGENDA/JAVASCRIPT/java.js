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
            var actividad = form.querySelector('input[name="actividad"]').value;
            
            if(vacio || !fecha || !hora || !actividad) {
                alert('Por favor, complete todos los campos.');
                e.preventDefault();
            }
        });
    }

    // Mostrar nombre seleccionado para Persona
    var personaSel = document.querySelector('select[name="idpersona"]');
    var personaOut = document.getElementById('nombre_persona');
    if(personaSel && personaOut) {
        personaSel.addEventListener('change', function() {
            var txt = personaSel.options[personaSel.selectedIndex].text;
            personaOut.textContent = txt !== '-- Elige una Persona --' ? 'Persona seleccionada: ' + txt : '';
        });
    }
});