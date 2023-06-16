
window.addEventListener('load', function() {
	var cantidad_estandar = 1;
	var tamaño_mobile = 2;
	var tamaño_grande = 3;

	/* RUSIA */
	new Glider(document.querySelector('.rusia__lista'), {
		slidesToShow: cantidad_estandar,
		slidesToScroll: cantidad_estandar,
		draggable: true,
		dots: '.rusia__indicadores',
		arrows: {
			prev: '.rusia__anterior',
			next: '.rusia__siguiente'
		},
		responsive: [{
			// screens greater than >= 775px
			breakpoint: 450,
			settings: {
				// Set to `auto` and provide item width to adjust to viewport
				slidesToShow: tamaño_mobile,
				slidesToScroll: tamaño_mobile
			}
		}, {
			// screens greater than >= 1024px
			breakpoint: 1024,
			settings: {
				slidesToShow: tamaño_grande,
				slidesToScroll: tamaño_grande
			}
		}]
	});

	/* GASTRONOMIA */
	new Glider(document.querySelector('.gastronomia__lista'), {
		slidesToShow: cantidad_estandar,
		slidesToScroll: cantidad_estandar,
		draggable: true,
		dots: '.gastronomia__indicadores',
		arrows: {
			prev: '.gastronomia__anterior',
			next: '.gastronomia__siguiente'
		},
		responsive: [{
			// screens greater than >= 775px
			breakpoint: 450,
			settings: {
				// Set to `auto` and provide item width to adjust to viewport
				slidesToShow: tamaño_mobile,
				slidesToScroll: tamaño_mobile
			}
		}, {
			// screens greater than >= 1024px
			breakpoint: 800,
			settings: {
				slidesToShow: tamaño_grande,
				slidesToScroll: tamaño_grande
			}
		}]
	});

	/* CULTURA */
/* 	new Glider(document.querySelector('.cultura__lista'), {
		slidesToShow: cantidad_estandar,
		slidesToScroll: cantidad_estandar,
		draggable: true,
		dots: '.cultura__indicadores',
		arrows: {
			prev: '.cultura__anterior',
			next: '.cultura__siguiente'
		},
		responsive: [{
			// screens greater than >= 775px
			breakpoint: 450,
			settings: {
				// Set to `auto` and provide item width to adjust to viewport
				slidesToShow: tamaño_mobile,
				slidesToScroll: tamaño_mobile
			}
		}, {
			// screens greater than >= 1024px
			breakpoint: 800,
			settings: {
				slidesToShow: tamaño_grande,
				slidesToScroll: tamaño_grande
			}
		}]
	}); */

	/* clima */
	new Glider(document.querySelector('.clima__lista'), {
		slidesToShow: cantidad_estandar,
		slidesToScroll: cantidad_estandar,
		draggable: true,
		dots: '.clima__indicadores',
		arrows: {
			prev: '.clima__anterior',
			next: '.clima__siguiente'
		},
		responsive: [{
			// screens greater than >= 775px
			breakpoint: 450,
			settings: {
				// Set to `auto` and provide item width to adjust to viewport
				slidesToShow: tamaño_mobile,
				slidesToScroll: tamaño_mobile
			}
		}, {
			// screens greater than >= 1024px
			breakpoint: 800,
			settings: {
				slidesToShow: tamaño_grande,
				slidesToScroll: tamaño_grande
			}
		}]
	});


	/* TRANSPORTE */
	new Glider(document.querySelector('.transporte__lista'), {
		slidesToShow: cantidad_estandar,
		slidesToScroll: cantidad_estandar,
		draggable: true,
		dots: '.transporte__indicadores',
		arrows: {
			prev: '.transporte__anterior',
			next: '.transporte__siguiente'
		},
		responsive: [{
			// screens greater than >= 775px
			breakpoint: 450,
			settings: {
				// Set to `auto` and provide item width to adjust to viewport
				slidesToShow: tamaño_mobile,
				slidesToScroll: tamaño_mobile
			}
		}, {
			// screens greater than >= 1024px
			breakpoint: 800,
			settings: {
				slidesToShow: tamaño_grande,
				slidesToScroll: tamaño_grande
			}
		}]
	});


});