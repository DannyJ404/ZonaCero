window.addEventListener('load', iniciar, false);

/* Contador inicializado en cero */
var contador = 0;

function iniciar() {
  setInterval(cambiarImg, 2000); // Llama a cambiarImg cada 2 segundos
}

function cambiarImg() {
  var obj = document.getElementById('slider');
  var obj2 = obj.getElementsByTagName('img');

  // Oculta todas las imágenes
  for (var i = 0; i < obj2.length; i++) {
    obj2[i].style.opacity = '0';
  }

  // Muestra la imagen correspondiente al contador
  obj2[contador].style.opacity = '1';

  // Incrementa el contador, y lo reinicia si llega al final
  contador++;
  if (contador >= obj2.length) {
    contador = 0;
  }
}
