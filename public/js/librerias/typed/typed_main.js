const typed = new Typed('.typed', {
	strings: [
		'Estudia en Rusia con la ayuda de Opiti.'
	],

	//stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
	typeSpeed: 40, // Velocidad en mlisegundos para poner una letra,
	startDelay: 1, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
	showCursor: true, // Mostrar cursor palpitanto
	cursorChar: '|', // Caracter para el cursor
	contentType: 'html', // 'html' o 'null' para texto sin formato
});