// Función para iniciar el contador regresivo
function iniciarContador(inicio, fin, elementId) {
    const inicioTime = new Date(inicio).getTime();
    const finTime = new Date(fin).getTime();

    const countdown = setInterval(function() {
        const now = new Date().getTime();
        const distance = finTime - now;

        if (distance < 0) {
            clearInterval(countdown);
            document.getElementById(elementId).innerHTML = "Consola disponible";
        } else {
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById(elementId).innerHTML = hours + ":" + minutes + ":" + seconds;
        }
    }, 1000);
}

// Hacer una petición AJAX para obtener los tiempos de la consola por su ID
function obtenerTiemposConsola(idConsola, elementId) {
    fetch(`/times/${idConsola}`)
        .then(response => response.json())
        .then(data => {
            if (data.INICIO && data.FINAL) {
                // Iniciar el contador para la consola específica
                iniciarContador(data.INICIO, data.FINAL, elementId);
            } else {
                console.error('No se encontraron tiempos para esta consola.');
                document.getElementById(elementId).innerHTML = "Sin datos";
            }
        })
        .catch(error => console.error('Error al obtener los tiempos:', error));
}
