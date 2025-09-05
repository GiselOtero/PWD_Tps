import { estaVacio, reglasCampos } from "./funciones.js";
/* document.addEventListener("DOMContentLoaded", () => { */
console.log("0");

function soloLetras(texto) {
  const regex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
  return regex.test(texto);
}

const form = document.getElementById("formEjercicio4");

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

    if (!valido) {
      e.preventDefault(); // Evita el envío si hay errores
    }
  });
}
//validacion ejercicio3
/* }); */
