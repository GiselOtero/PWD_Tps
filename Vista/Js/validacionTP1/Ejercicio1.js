import { estaVacio, esNumero } from "./funciones.js";
/* document.addEventListener("DOMContentLoaded", () => { */

console.log("Ejercicio1");
const Ejercicio1 = document.getElementById("verNum");
if (Ejercicio1) {
  const campo = document.getElementById("num");
  const error = document.getElementById("error");


  if (campo && error) {
    campo.addEventListener("input", () => {
      if (estaVacio(campo.value)) {
        campo.classList.add("is-invalid");
        error.textContent = "Este campo no puede estar vacío";
      } else if (!esNumero(campo.value)) {
        campo.classList.add("is-invalid", "text-danger");
        error.textContent = "Solo se permiten números validos";
      } else {
        campo.classList.remove("is-invalid", "text-danger");
        error.textContent = "";
      }
    });

    Ejercicio1.addEventListener("submit", function (e) {
      e.preventDefault();
      if (estaVacio(campo.value)) {
        campo.classList.add("is-invalid");
        error.textContent = "Este campo no puede estar vacío";
      } else if (!esNumero(campo.value)) {
        campo.classList.add("is-invalid");
        error.textContent = "Solo se permiten números validos";
      } else {
        campo.classList.remove("is-invalid");
        error.textContent = "";
        console.log("Formulario enviado correctamente");
        Ejercicio1.submit();
      }
    });
  }
}
/* });
 */
