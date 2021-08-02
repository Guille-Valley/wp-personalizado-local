window.onload = function () {

}

if (window.matchMedia("(min-width: 400px)").matches) {
    // La pantalla tiene al menos 400 píxeles de ancho

} else {
    // La pantalla tiene menos de 400 píxeles de ancho

}

// Insertar botón hamburguesa menú móvil.
document.getElementById("nav-id").innerHTML += "<button id='btn-menu-mvl' class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>";

document.getElementById('btn-menu-mvl').addEventListener('click', obtener_menu_mvl, false);

function obtener_menu_mvl() {
    let x = document.getElementById('navbarSupportedContent');
    if (x.style.display == "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}