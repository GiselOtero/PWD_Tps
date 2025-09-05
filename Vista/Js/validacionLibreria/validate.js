
console.log("hi");
$(document).ready(function () {
jQuery.validator.addMethod("validpassword", function(value, element) {
    return this.optional(element) || /^[a-z0-9]{6,10}$/i.test(value);
}, " ");

$("#login").validate({
    errorClass: "error is-invalid text-danger",
    validClass: "valid is-valid",
    errorElement:"span",
    rules:{
        user:{
            required:true,
            minlength:4,
        },
        password:{
            required:true,
            /* validpassword:true, */
            
        },
    },
    messages:{
        user:{
            required:"ingrese un usuario",
            minlength:"debe ingresar mas de 4 caracteres",
        },
        password:{
            required:"ingrese una contraseña",
            /* validpassword:"ingrese una cadena valida" */
        }
    }
});
})