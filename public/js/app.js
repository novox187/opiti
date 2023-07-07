/* NAV */
const menu = document.querySelector('.menu');
const desplegable = document.querySelector('.nav_mobile')


window.addEventListener("scroll", function () {
    var header = document.querySelector(".nav");
    header.classList.toggle("activo", window.scrollY > 0);

})

window.addEventListener("scroll", function () {
    var info = document.querySelector(".info");
    info.classList.toggle("info_activo", window.scrollY > 0);

})


window.addEventListener("scroll", function () {
    var separador = document.querySelector(".separador");
    separador.classList.toggle("Separador__activo", window.scrollY > 0);
})


/* NAV_MOBILE */



menu.addEventListener('click', () => {
    if (window.scrollY <= 0) {
        desplegable.classList.remove("activo_mobile2");
        desplegable.classList.toggle("activo_mobile")
    }else{
        desplegable.classList.remove("activo_mobile");
        desplegable.classList.toggle("activo_mobile2")
    }
})

window.addEventListener("scroll", function () {
    var header = document.querySelector(".nav_mobile");
    if (desplegable.classList.contains('activo_mobile')) {
        header.classList.toggle("activo_mobile2", window.scrollY > 0);
    }
})


/* CHAT */

popupWhatsApp = () => {

    let btnClosePopup = document.querySelector('.closePopup');
    let btnOpenPopup = document.querySelector('.whatsapp-button');
    let popup = document.querySelector('.popup-whatsapp');
    let sendBtn = document.getElementById('send-btn');

    btnClosePopup.addEventListener("click", () => {
        popup.classList.toggle('is-active-whatsapp-popup')
    })

    btnOpenPopup.addEventListener("click", () => {
        popup.classList.toggle('is-active-whatsapp-popup')
        popup.style.animation = "fadeIn .6s 0.0s both";
    })

    sendBtn.addEventListener("click", () => {
        let msg = document.getElementById('whats-in').value;
        let relmsg = msg.replace(/ /g, "%20");

        window.open('https://wa.me/+79969434635?text=' + relmsg, '_blank');

    });

/*     setTimeout(() => {
        popup.classList.toggle('is-active-whatsapp-popup');
    }, 3000); */
}

popupWhatsApp();

/* NAV */