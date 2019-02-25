// ACTIVAR PAQUETES
function habilitarServicio() {
  if(formulario.asunto.options[3].selected == true) {
    document.getElementById('servicio').disabled = false;
  } else {
    document.getElementById('servicio').disabled = true;
  }
}

// CREAR Y COMPROBAR CAPTCHA
function captcha() {
  var x = Math.round(Math.random()*10);
  var y = Math.round(Math.random()*10);
  var z = x + y;
  var resultado = prompt("Captcha: " + x + " + " + y + " = ");
  document.getElementById('captcha').innerHTML = x + " + " + y + " = " + z;
  if(resultado == z) {
    document.getElementById('enviar').disabled = false;
  } else {
    document.getElementById('enviar').disabled = true;
  }
}

// CONTACTO ENVIADO
function enviado() {
  alert("Formulario enviado correctamente.");
}
