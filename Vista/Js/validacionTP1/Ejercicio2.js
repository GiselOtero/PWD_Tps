/* document.addEventListener("DOMContentLoaded", () => { */
console.log("ejercicio2");

//validacion ejercicio2
const Ejercicio2 = document.getElementById("semana");
const dias = ["lunes", "martes", "miercoles", "jueves", "viernes"];
console.log("form2");
if (Ejercicio2) {
  dias.forEach((dia) => {
    const input = document.getElementById(dia);
    const errorDiv = document.getElementById(`error-${dia}`);
    console.log("foreach");
    if (input && errorDiv) {
      input.addEventListener("input", () => {
        const valor = parseInt(input.value);

        if (isNaN(valor) || valor < 0 || valor > 24) {
          input.classList.add("is-invalid");

          errorDiv.textContent = "Ingrese un número entre 0 y 24.";
        } else {
          input.classList.remove("is-invalid");
          errorDiv.textContent = "";
        }
      });
    }
  });

  Ejercicio2.addEventListener("submit", function (e) {
    let valido = true;

    dias.forEach((dia) => {
      const input = document.getElementById(dia);
      const errorDiv = document.getElementById(`error-${dia}`);
      if (input && errorDiv) {
        const valor = parseInt(input.value);

        if (isNaN(valor) || valor < 0 || valor > 24) {
          input.classList.add("is-invalid");
          errorDiv.textContent = "Este campo debe estar entre 0 y 24.";
          valido = false;
        }
      }
    });

    if (!valido) {
      e.preventDefault(); // Evita que se envíe el formulario
    }
  });
}
//validacion
/* });
 */
