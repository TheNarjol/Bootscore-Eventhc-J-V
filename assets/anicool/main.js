var scrollElements = document.querySelectorAll(".anicool-scroll");
		scrollElements.forEach((elm) => {
			elm.classList.add("anicool-paused")
		})
// esta funcion comprueba si un elemento esta visible en pantalla
		function isVisible(elm) {
			var rect = elm.getBoundingClientRect();
			var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
			return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
		}
		function removePaused() {
			// y a todos los elementos con la clase paused
			document.querySelectorAll(".anicool-paused").forEach(elm => {
				if (isVisible(elm)) // que sean visibles...
				elm.classList.remove("anicool-paused"); // les quitamos la clase paused
		})
		}

// cuando se carga la página...
		window.addEventListener('DOMContentLoaded', (ev0) => {
			removePaused()
        // asignamos un evento scroll...
			window.addEventListener('scroll', (ev1) => {
				removePaused()
			});
		});