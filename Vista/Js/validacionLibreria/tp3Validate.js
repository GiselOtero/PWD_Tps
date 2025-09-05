console.log("Tp3 ");
$(document).ready(function () {
  $("#tp3ejercicio1").validate({
    errorClass: "error is-invalid text-danger",
    validClass: "valid is-valid",
    errorElement: "span",
    rules: {
      upload: {
        required: true,
      },
    },
    messages: {
      upload: {
        required: "Por favor, selecciona un archivo",
      },
    },
  });


  $("#tp3ejercicio2").validate({
    errorClass: "error is-invalid text-danger",
    validClass: "valid is-valid",
    errorElement: "span",
    rules: {
      upload: {
        required: true,
      },
    },
    messages: {
      upload: {
        required: "Por favor, selecciona un archivo",
      },
    },
  });
});
