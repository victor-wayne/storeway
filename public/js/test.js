var btnCerrarPopup = document.getElementById('btn-cerrar-popup'),
    overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup');

    btnCerrarPopup.addEventListener('click', function () {
    overlay.classList.remove('active');

});