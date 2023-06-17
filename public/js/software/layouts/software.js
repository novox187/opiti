
const user = document.querySelector('.nav__user');

user.addEventListener("click", function () {
    var desplegable = document.querySelector(".nav__desplegable");
    desplegable.classList.toggle("d_activo");
})

const herramienta = document.querySelector('.menu');
const lis = document.querySelectorAll('.opciones');

herramienta.addEventListener("click", function () {
    herramienta.classList.toggle("menu__activo");
    lis.forEach(li => li.classList.toggle("hidden"));
    
})
