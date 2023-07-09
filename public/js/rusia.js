function mostrarInformacion(id) {
    var informacion = document.getElementById("inf__galerias" + id);
    var nombre = document.getElementById("nombre__galerias" + id);

    nombre.style.display = "none";

    informacion.classList.toggle("activo_info");
}
function ocultarInformacion(id) {
    var informacion = document.getElementById("inf__galerias" + id);
    var nombre = document.getElementById("nombre__galerias" + id);

    nombre.style.display = "flex";

    informacion.classList.remove("activo_info");
}

var imagenActual = null;
var informacionActual = null;
var nombreActual = null;
var expandActual = null;
var iconActual = null;

function cambiarTamano(id) {
    var informacion = document.getElementById("inf__galerias" + id);
    var imagen_g = document.getElementById("imagen__galerias" + id);
    var nombre = document.getElementById("nombre__galerias" + id);
    var expand = document.getElementById("expand" + id);
    var icon = document.getElementById("icon__expand" + id);

    if (imagen_g.classList.contains("imagen__activo")) {

        imagen_g.classList.remove("imagen__activo");
        nombre.classList.remove("nombre__activo");

        nombre.style.display = "flex";

        expand.classList.remove("expand__activo");
        expand.classList.remove("fa-beat");
        icon.classList.remove("fa-down-left-and-up-right-to-center");
        icon.classList.add("fa-maximize");

        informacion.classList.remove("activo_info");

        imagenActual = null;
        informacionActual = null;
        nombreActual = null;
        expandActual = null;
        iconActual = null;
    } else {
        if (imagenActual) {
          imagenActual.classList.remove("imagen__activo");
          informacionActual.classList.remove("activo_info");
          nombreActual.classList.remove("nombre__activo");
          nombreActual.style.display = "flex";
          expandActual.classList.remove("expand__activo");
          expandActual.classList.remove("fa-beat");
          iconActual.classList.remove("fa-down-left-and-up-right-to-center");
          iconActual.classList.add("fa-maximize");

        }
        nombre.classList.add("nombre__activo");
        imagen_g.classList.add("imagen__activo");
        expand.classList.add("expand__activo");
        expand.classList.add("fa-beat");
        icon.classList.remove("fa-maximize");
        icon.classList.add("fa-down-left-and-up-right-to-center");

        imagenActual = imagen_g;
        informacionActual = informacion;
        nombreActual = nombre;
        expandActual = expand;
        iconActual = icon;
        console.log(iconActual);
    }
}
