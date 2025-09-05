console.log("Tp1 ");
$(document).ready(function () {
  $("#verNum").validate({
    errorClass: "error is-invalid text-danger",
    validClass: "valid is-valid",
    errorElement: "span",
    rules: {
      num: {
        required: true,
        number: true,
        //minlength:4,
      },
    },
    messages: {
      num: {
        required: "Ingrese un número",
        number: "ingrese un valor valido",
        //minlength:"debe ingresar mas de 4 caracteres",
      },
    },
  });

  console.log("Ejercicio2");
  $("#semana").validate({
    errorClass: "error is-invalid text-danger",
    validClass: "valid is-valid",
    errorElement: "span",
  });

  
  $("input[name='semana[]']").each(function (index) {
    $(this).rules("add", {
      required: true,
      number: true,
      maxlength: 2,
      messages: {
        required: "Ingrese la cantidad de horas",
        number: "Ingrese un valor válido",
        maxlength: "Máximo 2 caracteres",
      },
    });
  });

  console.log("validacion");
  $("#formEjercicio3").validate({
    errorClass: "error is-invalid text-danger",
    validClass: "valid is-valid",
    errorElement: "span",
    rules: {
      nombre: {
        required: true,
        pattern: /^[A-Za-z\s]+$/,
        minlength: 2,
      },
      apellido: {
        required: true,
        pattern: /^[A-Za-z\s]+$/,
        minlength: 2,
      },
      edad: {
        required: true,
        number: true,
        min: 1,
      },
      direccion: {
        required: true,
        minlength: 2,
      },
    },
    messages: {
      nombre: {
        required: "Ingrese nombre",
        pattern: "Solo permiten letras y espacios",
        minlength: "El nombre debe tener al menos 2 caracteres",
      },
      apellido: {
        required: "Ingrese apellido",
        pattern: "Solo permiten letras y espacios",
        minlength: "El apellido debe tener al menos 2 caracteres",
      },
      edad: {
        required: "Ingrese edad",
        number: "Ingrese un valor válido",
        min: "Debe tener al menos 1 año",
      },
      direccion: {
        required: "Ingrese direccion",
        minlength: "La direccion debe tener al menos 2 caracteres",
      },
    },
  });
  $("#formEjercicio3").submit(function (event) {
    if (!$(this).valid()) {
      event.preventDefault();
    }
  });

  $("#formEjercicio4").validate({
    errorClass: "error is-invalid text-danger",
    validClass: "valid is-valid",
    errorElement: "span",
    rules: {
      nombre: {
        required: true,
        pattern: /^[A-Za-z\s]+$/,
        minlength: 2,
      },
      apellido: {
        required: true,
        pattern: /^[A-Za-z\s]+$/,
        minlength: 2,
      },
      edad: {
        required: true,
        number: true,
        min: 1,
      },
      direccion: {
        required: true,
        minlength: 2,
      },
    },
    messages: {
      nombre: {
        required: "Ingrese nombre",
        pattern: "Solo permiten letras y espacios",
        minlength: "El nombre debe tener al menos 2 caracteres",
      },
      apellido: {
        required: "Ingrese apellido",
        pattern: "Solo permiten letras y espacios",
        minlength: "El apellido debe tener al menos 2 caracteres",
      },
      edad: {
        required: "Ingrese edad",
        number: "Ingrese un valor válido",
        min: "Debe tener al menos 1 año",
      },
      direccion: {
        required: "Ingrese direccion",
        minlength: "La direccion debe tener al menos 2 caracteres",
      },
    },
  });

  $("#formEjercicio5").validate({
    errorClass: "error is-invalid text-danger",
    validClass: "valid is-valid",
    errorElement: "spam",
    errorPlacement: function (error, element) {
      if (element.attr("name") == "genero") {
        error.insertAfter(element.closest(".radioGenero").parent());
      } else {
        error.insertAfter(element);
      }
    },
    rules: {
      nombre: {
        required: true,
        number: false,
        pattern: /^[A-Za-z\s]+$/,
        minlength: 2,
      },
      apellido: {
        required: true,
        number: false,
        minlength: 2,
      },
      edad: {
        required: true,
        number: true,
        min: 1,
      },
      direccion: {
        required: true,
        minlength: 2,
      },
      estudios: {
        required: true,
      },
      genero: {
        required: true,
      },
    },
    messages: {
      nombre: {
        required: "Ingrese nombre",
        number: "Ingrese un valor valido",
        pattern: "Solo permiten letras y espacios",
        minlength: "El nombre debe tener al menos 2 caracteres",
      },
      apellido: {
        required: "Ingrese apellido",
        number: "Ingrese un valor valido",
        pattern: "Solo permiten letras y espacios",
        minlength: "El apellido debe tener al menos 2 caracteres",
      },
      edad: {
        required: "Ingrese edad",
        number: "Ingrese un valor valido",
        minlength: "Debe tener al menos 1 caracter",
      },
      direccion: {
        required: "Ingrese direccion",
        minlength: "La direccion debe tener al menos 2 caracteres",
      },
      estudios: {
        required: "Ingrese al menos una opcion",
      },
      genero: {
        required: "Ingrese una opcion",
      },

      /* En este ejemplo, el grupo de radiobuttons genero tiene una regla: debe ser obligatorio (required). Si el usuario no selecciona ninguna opción, se mostrará el mensaje "Por favor, selecciona tu género." Además, usamos la opción errorPlacement para controlar dónde se coloca el mensaje de error. */
    },
  });

  jQuery.validator.addMethod(
    "require_one",
    function (value, element) {
      return $('input[name="opciones"]:checked').length > 0;
    },
    "Debes seleccionar al menos una opción"
  );

  jQuery.validator.addMethod(
    "minCheck",
    function (value, element, min) {
      var checked = $(".deportes:checked").length;
      return checked >= min;
    },
    "Debes seleccionar al menos {0} deportes"
  );

  $("#formEjercicio6").validate({
    errorClass: "error is-invalid text-danger",
    validClass: "valid is-valid",
    errorElement: "div",

    rules: {
      nombre: {
        required: true,
        number: false,
        pattern: /^[A-Za-z\s]+$/,
        minlength: 2,
      },
      apellido: {
        required: true,
        number: false,
        minlength: 2,
      },
      edad: {
        required: true,
        number: true,
        min: 1,
      },
      direccion: {
        required: true,
        minlength: 2,
      },
      estudios: {
        required: true,
      },
      genero: {
        required: true,
      },
      "deportes[]": {
        minCheck: 2,
      },
    },
    messages: {
      nombre: {
        required: "Ingrese nombre",
        number: "Ingrese un valor valido",
        pattern: "Solo permiten letras y espacios",
        minlength: "El nombre debe tener al menos 2 caracteres",
      },
      apellido: {
        required: "Ingrese apellido",
        number: "Ingrese un valor valido",
        pattern: "Solo permiten letras y espacios",
        minlength: "El apellido debe tener al menos 2 caracteres",
      },
      edad: {
        required: "Ingrese edad",
        number: "Ingrese un valor valido",
        minlength: "Debe tener al menos 1 caracter",
      },
      direccion: {
        required: "Ingrese direccion",
        minlength: "La direccion debe tener al menos 2 caracteres",
      },
      estudios: {
        required: "Ingrese al menos una opcion",
      },
      genero: {
        required: "Ingrese una opcion",
      },
      "deportes[]": {
        minCheck: "Ingrese al menos una opcion",
      },
      errorPlacement: function (error, element) {
        error.addClass("invalid-feedback");
        error.insertAfter(element.parent("label"));
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass("is-invalid").removeClass("is-valid");
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).addClass("is-valid").removeClass("is-invalid");
      },

      /* 
            errorPlacement: function(error, element) { if (element.attr("name") == "genero") { error.insertAfter(element.closest("label")); } else { error.insertAfter(element); } }
            */
      /* En este ejemplo, el grupo de radiobuttons genero tiene una regla: debe ser obligatorio (required). Si el usuario no selecciona ninguna opción, se mostrará el mensaje "Por favor, selecciona tu género." Además, usamos la opción errorPlacement para controlar dónde se coloca el mensaje de error. */
    },
  });

  $("#formEjercicio7").validate({
    errorClass: "error is-invalid text-danger",
    validClass: "valid is-valid",
    errorElement: "div",
    rules: {
      num1: {
        required: true,
        number: true,
      },
      num2: {
        required: true,
        number: true,
      },
      operacion: {
        required: true,
      },
    },
    messages: {
      num1: {
        required: "Ingrese un número",
        number: "Ingrese un valor valido",
      },
      num2: {
        required: "Ingrese un número",
        number: "Ingrese un valor valido",
      },
      operacion: {
        required: "Seleccione al menos una opcion",
      },
    },
  });

  $("#formEjercicio8").validate({
    errorClass: "error is-invalid text-danger",
    validClass: "valid is-valid",
    errorElement: "div",
    rules: {
      nombre: {
        required: true,
        pattern: /^[A-Za-z\s]+$/,
        minlength: 2,
      },
      edad: {
        required: true,
        number: true,
      },
      estudiante: {
        required: true,
      },
    },
    messages: {
      nombre: {
        required: "Ingrese un nombre",
        pattern: "Ingrese un valor valido",
        minlength: "El nombre debe tener al menos 2 caracteres",
      },
      edad: {
        required: "Ingrese un número",
        number: "Ingrese un valor valido",
      },
      estudiante: {
        required: "Seleccione al menos una opcion",
      },
    },
  });
});
