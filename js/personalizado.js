document.addEventListener('DOMContentLoaded', function () {
    // Selecciona el botón del navbar-toggler y el contenedor del menú
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    // Verifica si ambos elementos existen
    if (navbarToggler && navbarCollapse) {
        // Inicializa el comportamiento del toggle
        navbarToggler.addEventListener('click', function () {
            navbarCollapse.classList.toggle('show');
        });
    }
});