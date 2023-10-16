
document.addEventListener('DOMContentLoaded', function() {
    const elementosLi = document.querySelectorAll('.option'); // Obtén todos los elementos <li> con la clase "option"

    elementosLi.forEach(function(li) {
        const a = li.querySelector('a'); // Encuentra el elemento <a> dentro de cada <li>

        li.addEventListener('click', function() {
            a.click(); // Dispara un clic en el <a> dentro de este <li>
        });
    });
});

