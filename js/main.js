window.onload = init();

// Inicialización
function init () {
	// deleteFirstSpaceEmptyOptions();
}

// Eliminando primer elemento de las sub optiones
function deleteFirstSpaceEmptyOptions() {
	var options = document.getElementById('content-sub-option').childNodes;
	options[0].style.display = 'none';
}


