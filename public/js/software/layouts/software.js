
const user = document.querySelector('.nav__user');

user.addEventListener("click", function () {
    var desplegable = document.querySelector(".nav__desplegable");
    desplegable.classList.toggle("d_activo");
})
