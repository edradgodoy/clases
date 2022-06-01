$("span.help-block").hide();

$(function() {
    // Evento de los permisos
    $("#nombrePuesto").off('submit').on("change blur focus submit keyup", function(event){
        if (event == 'submit') {
            verificarFormPuesto();
        } else {
            validFormPalabras('nombrePuesto',3,100);
        }
    });
});

function verificarFormPuesto() {
    var vfpu1=0;
    vfpu1=validFormPalabras('nombrePuesto',3,100);
    if (vfpe1===false) {
        $('#formPuesto').off('submit').on('submit', function(event){
            alert(vfpu1);
            event.preventDefault();
            event.stopPropagation();
        });
    }
}

/*
 *  Función que se encargara de validar el campo de los formularios de 
 *  solo letras y espacios esta función recibe como parámetros:
 *  campo-> que recibe el valor del input que se va a evaluar.
 *  min-> la longitud mínima del string a validar.
 *  max-> la longitud máxima del string a validar 
 *
 */
function validFormPalabras(campo,min,max){
    dato = document.getElementById(campo).value;//Traemos el nombre y valor del campo para validar.
    // Validamos que el campo sea obligatorio.
    if( dato == null || dato.length == 0 || /^\s+$/.test(dato) ) {
        $('#glypcn'+campo).remove();
        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
        $('#'+campo).parent().children("span").text("Este es un campo obligatorio, por favor, ingrese algún valor.").show();
        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
    }
    if ((dato.length) < min){
        $('#glypcn'+campo).remove();
        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
        $('#'+campo).parent().children("span").text("Este campo debe tener un mínimo de " + min + " caracteres.").show();
        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
    }
    if ((dato.length) > max){
        $('#glypcn'+campo).remove();
        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
        $('#'+campo).parent().children("span").text("Este campo debe tener un máximo de " + max + " caracteres.").show();
        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
    }
    if (dato.match(/^[A-Za-z]+$/i)) { // Comprobamos la lista de caracteres permitidos
        $('#'+campo).attr("class", "form-control is-valid");
        texto = dato.toLowerCase(); // Convertimos la cadena del texto en minúsculas.
        dato2 = texto.charAt(0).toUpperCase() + texto.slice(1); // La primera letra del campo lo ponemos en mayúscula.
        $('#'+campo).val(dato2); // Colocamos el nuevo valor del campo con la primera letra en mayúscula y el resto en minúscula.
        $('#'+campo).parent().children('.invalid-tooltip').text("").hide();
        return true;
    } else{
        $('#'+campo).attr("class", "form-control is-invalid");
        $('#'+campo).parent().append("<div class='invalid-tooltip'></div>");
        $('#'+campo).parent().children('.invalid-tooltip').text("Este campo no acepta caracteres especiales, solo letras del alfabeto y los acentos.").show();
        return false;
    }
}