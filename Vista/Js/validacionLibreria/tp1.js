document.addEventListener("DOMContentLoaded", () => {
  console.log("0");

  function soloLetras(texto) {
    const regex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
    return regex.test(texto);
  }
  function estaVacio(valor) {
    return valor.trim() === "";
  }

  const form = document.getElementById("formEjercicio3");

  const campos = {
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
      regex: /^[a-zA-Z0-9\sáéíóúÁÉÍÓÚñÑ.,#-]+$/,
      error: "Solo letras, números y algunos símbolos básicos.",
    },
  };

  Object.keys(campos).forEach((id) => {
    const input = document.getElementById(id);
    const feedback = document.getElementById(`error-${id}`);

    input.addEventListener("input", () => {
      const valor = input.value.trim();
      const { regex, error } = campos[id];

      if (estaVacio(valor)) {
        input.classList.add("is-invalid");
        feedback.textContent = "Este campo no puede estar vacío";
      }else
      if (regex.test(valor)) {
        input.classList.remove("is-invalid");
        input.classList.add("is-valid");
        feedback.textContent = "";
      } else {
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        feedback.textContent = error;
      }
    });
  });

  form.addEventListener("submit", (e) => {
    let valido = true;
    Object.keys(campos).forEach((id) => {
      const input = document.getElementById(id);
      const feedback = document.getElementById(`error-${id}`);
      const valor = input.value.trim();
      const { regex } = campos[id];

      if (estaVacio(valor)) {
        input.classList.add("is-invalid");
        feedback.textContent = "Este campo no puede estar vacío";
        valido = false;
      }
      if (!regex.test(valor)) {
        input.classList.add("is-invalid");
        valido = false;
      }
    });

    if (!valido) {
      e.preventDefault(); // Evita el envío si hay errores
    }
  });

  //validacion ejercicio3
});
