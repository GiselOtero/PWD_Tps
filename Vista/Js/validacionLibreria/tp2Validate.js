console.log("tp2");
$(document).ready(function () {

    $("#cinema").validate({
        errorClass: "error is-invalid text-danger",
        validClass: "valid is-valid",
        errorElement:"div", 
        rules:{
            titulo:{
                required:true,
                minlength:1,
            },
            director:{
                required:true,
                minlength:1,
            },
            produccion:{
                required:true,
                minlength:1,
            },
            nacionalidad:{
                required:true,
                minlength:1,
            },
            sinopsis:{
                required:true,
                minlength:1,
            },
            actores:{
                required:true,
                minlength:1,
            },
            guion:{
                required:true,
                minlength:1,
            },
            anio:{
                required:true,
                number:true,
                min:1900,
                maxlength:4,
                //max:9999,
            },
            duracion:{
                required:true,
                number:true,
                min:1,
                maxlength:3,
                //max:999,
            },
            genero:{
                required:true,   
            },
            restriccion:{
                required:true,
            },
        },
        messages:{
            titulo:{
                required:"Ingrese Titulo",
                minlength:"Al menos debe tener un caracter",
            },
            director:{
                required:"Ingrese un director ",
                minlength:"Al menos debe tener un caracter",
            },
            produccion:{
                required:"Ingrese una produccion",
                minlength:"Al menos debe tener un caracter",
            },
            nacionalidad:{
                required:"Ingrese nacionalidad",
                minlength:"Al menos debe tener un caracter",
            },
            sinopsis:{
                required:"Ingrese una sinopsis",
                minlength:"Al menos debe tener un caracter",
            },
            actores:{
                required:"Ingrese un actor",
                minlength:"Al menos debe tener un caracter",
            },
            guion:{
                required:"Ingrese guion",
                minlength:"Al menos debe tener un caracter",
            },
            anio:{
                required:"Ingrese el año",
                number:"Ingrese un número valido",
                min:"debe ser mayor de 1900",
                maxlength:"No debe superar a los 4 caracteres",
                //max:"debe ser menor de 9999",
            },
            duracion:{
                required:"Ingrese duracion",
                number:"Ingrese un número valido",
                min:"No debe ser menor a 1",
                maxlength:"No debe superar a los 3 caracteres",
                //max:999,
            },
            genero:{
                required:"Ingrese una opcion",   
            },
            restriccion:{
                required:"Ingrese una opcion",
            },
        },
    });

});