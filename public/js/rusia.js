function mostrarInformacion(id) {
    var informacion = document.getElementById("inf__gastronomia" + id);
    var nombre = document.getElementById("nombre__gastronomia" + id);

    nombre.style.display = 'none';

    informacion.classList.toggle("activo_info");
}
function ocultarInformacion(id) {
    var informacion = document.getElementById("inf__gastronomia" + id);
    var nombre = document.getElementById("nombre__gastronomia" + id);

    nombre.style.display = 'flex';

    informacion.classList.remove("activo_info");
}

var imagenActual = null;

function cambiarTamano(id) {
  var informacion = document.getElementById("inf__gastronomia" + id);
  var imagen_g = document.getElementById("imagen__gastronomia" + id);
  var nombre = document.getElementById("nombre__gastronomia" + id);
  var expand = document.getElementById("expand" + id);
  var icon = document.getElementById("icon__expand" + id);

  if (imagen_g.classList.contains('imagen__activo')) {

    imagen_g.classList.remove('imagen__activo');
    nombre.classList.remove("nombre__activo");

    nombre.style.display = 'flex';

    expand.classList.remove("expand__activo");
    expand.classList.remove('fa-beat');
    icon.classList.remove("fa-down-left-and-up-right-to-center");
    icon.classList.add('fa-maximize');


    informacion.classList.remove("activo_info");

    imagenActual = null;
  } else {
    if (imagenActual) {
      imagenActual.classList.remove('imagen__activo');
    }
    nombre.classList.add("nombre__activo")
    imagen_g.classList.add('imagen__activo');
    expand.classList.add('expand__activo');
    expand.classList.add('fa-beat');
    icon.classList.remove("fa-maximize");
    icon.classList.add('fa-down-left-and-up-right-to-center');

    imagenActual = id;
  }
}