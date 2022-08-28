/*

const peliculas = document.querySelectorAll('.pelicula');

const flechaIzquierda = document.querySelector('.esquerda');
const flechaDerecha = document.querySelector('.direita');

// ? ----- ----- Event Listener para la flecha derecha. ----- -----
flechaDerecha.addEventListener('click', () => {
	fila.scrollLeft += fila.offsetWidth;
});

// ? ----- ----- Event Listener para la flecha izquierda. ----- -----
flechaIzquierda.addEventListener('click', () => {
	fila.scrollLeft -= fila.offsetWidth;	
});

// ? ----- ----- Paginacion ----- -----
const numeroPaginas = Math.ceil(peliculas.length / 5);
for(let i = 0; i < numeroPaginas; i++){
	const indicador = document.createElement('button');

	if(i === 0){
		indicador.classList.add('activo');
	}

	document.querySelector('').appendChild(indicador);
	indicador.addEventListener('click', (e) => {
		fila.scrollLeft = i * fila.offsetWidth;

		document.querySelector(' .activo').classList.remove('activo');
		e.target.classList.add('activo');
	});
}

// ? ----- ----- Hover ----- -----
peliculas.forEach((pelicula) => {
	pelicula.addEventListener('mouseenter', (e) => {
		const elemento = e.currentTarget;
		setTimeout(() => {
			peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
			elemento.classList.add('hover');
		}, 300);
	});
});

fila.addEventListener('mouseleave', () => {
	peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
});
*/
function scroll_(element){
	//console.log('clicou');
	//var pai = filho.parentNode;
	
	let id = element.getAttribute('id'),
	e_class = element.getAttribute('class'),
	fila = element.parentNode;
	

	flexa = document.getElementById(id);
	
	fila = fila.querySelector('.container-carrossel');


	if (e_class == 'esquerda') {
		fila.scrollLeft -= fila.offsetWidth;	
	}
	else if (e_class == 'direita') {
		fila.scrollLeft += fila.offsetWidth;	
	}


    


}