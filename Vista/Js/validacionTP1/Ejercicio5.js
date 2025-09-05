import { estaVacio, reglasCampos } from "./funciones.js";
/* document.addEventListener("DOMContentLoaded", () => { */
console.log("Ejercicio5");

function soloLetras(texto) {
  const regex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
  return regex.test(texto);
}

const form = document.getElementById("formEjercicio5");

if (form) {
  //verifico si el formulario existe

  Object.keys(reglasCampos).forEach((id) => {
    const input = document.getElementById(id);
    const feedback = document.getElementById(`error-${id}`);

    if (input && feedback) {
      input.addEventListener("input", () => {
        const valor = input.value.trim();
        const { regex, error } = reglasCampos[id];

        if (estaVacio(valor)) {
          input.classList.add("is-invalid");
          feedback.textContent = "Este campo no puede estar vacío";
        } else if (regex.test(valor)) {
          input.classList.remove("is-invalid");
          input.classList.add("is-valid");
          feedback.textContent = "";
        } else {
          input.classList.remove("is-valid");
          input.classList.add("is-invalid");
          feedback.textContent = error;
        }
      });
    }
  });
  //validacion radiobutton genero
  const radioGroup = document.querySelectorAll('input[name="genero"]');
  const radioFeedback = document.getElementById("error-genero");

  radioGroup.forEach((radio) => {
    radio.addEventListener("change", () => {
      if (radioFeedback) radioFeedback.textContent = ""; // Limpia el error al seleccionar
    });
  });

  form.addEventListener("submit", (e) => {
    let valido = true;
    Object.keys(reglasCampos).forEach((id) => {
      const input = document.getElementById(id);
      const feedback = document.getElementById(`error-${id}`);

      if (input && feedback) {
        const valor = input.value.trim();
        const { regex } = reglasCampos[id];

        if (estaVacio(valor)) {
          input.classList.add("is-invalid");
          feedback.textContent = "Este campo no puede estar vacío";
          valido = false;
        }
        if (!regex.test(valor)) {
          input.classList.add("is-invalid");
          valido = false;
        }
      }
    });
    const grupoGenero = document.getElementById("grupo-genero");
    const radioGenero = document.querySelectorAll('input[name="genero"]');
    const radioFeedbackGenero = document.getElementById("error-genero");
    const radioSeleccionado = Array.from(radioGenero).some((r) => r.checked);
    if (!radioSeleccionado && radioFeedbackGenero) {
      radioFeedbackGenero.textContent = "Seleccione una opción";
      grupoGenero.classList.add("is-invalid");
      valido = false;
    }
    if (!valido) {
      e.preventDefault(); // Evita el envío si hay errores
    }
  });
}
//validacion ejercicio3
/* }); */
