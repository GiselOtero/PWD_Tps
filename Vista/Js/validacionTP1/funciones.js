console.log('funciones.js cargado');

const reglasCampos = {
  nombre: {
    regex: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/,
    error: "Solo se permiten letras.",
  },
  apellido: {
    regex: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/,
    error: "Solo se permiten letras.",
  },
  edad: {
    regex: /^[0-9]{1,3}$/,
    error: "Debe ser un número válido.",
  },
  direccion: {
    /*  regex: /^[a-zA-Z0-9\sáéíóúÁÉÍÓÚñÑ.,#-]+$/, */
   regex: /^[A-Za-zÁÉÍÓÚáéíóúÑñ0-9\s\.,#\-°]+$/,
    error: "Solo letras, números y algunos símbolos básicos.",
  },
  email: {
    regex: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
    error: "Debe ser un correo válido.",
  },
  telefono: {
    regex: /^[0-9]{7,15}$/,
    error: "Debe ser un número de teléfono válido.",
  },
}

function soloLetras(texto) {
  const regex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
  return regex.test(texto);
}
function estaVacio(valor) {
  //para campos obligatorios
  return valor.trim() === "";
}


function esNumero(valor) {
  //numeros Z
  //const soloNumeros = /^[-+]?[0-9]+(\.[0-9]+)?$/;
  const soloNumeros = /^-?\d+(\.\d+)?$/;
  return soloNumeros.test(valor.trim());
}

export{
  reglasCampos,
  soloLetras,
  estaVacio,
  esNumero
}