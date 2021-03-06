/**Se usa en el new de Becado*/
function ajaxDni() {
    var dni = document.getElementById('becasmds_personabundle_becado_dni').value;
    $.ajax({
        url: Routing.generate('ajax_dni', {dni: dni}),
        dataType: 'json',
        type: 'post'
    })
    .done(function (data) {
        if (data.respuesta !== 'no_existe') {
            var message = "El becado ya existe, por favor realice la búsqueda en el listado correspondiente y continúe con la carga.";
            var Tittle = "Aviso";
            dalert.alert(message, Tittle, {
                messageFontColor: 'white',
                messageBgColor: 'rgb(119, 49, 134)',
                tittleBgColor: 'black',
                tittleFontColor: 'white'
            });
        }
        else {
            var message = "El becado no existe en la base de datos, continúe con la carga.";
            var Tittle = "Aviso";
            dalert.alert(message, Tittle, {
                messageFontColor: 'white',
                messageBgColor: 'rgb(119, 49, 134)',
                tittleBgColor: 'black',
                tittleFontColor: 'white'
            });
        }
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        if (typeof jqXHR.responseJSON !== 'undefined') {
            if (jqXHR.responseJSON.hasOwnProperty('form')) {
                $('#form_body').html(jqXHR.responseJSON.form);
            }
            $('.form_error').html(jqXHR.responseJSON.message);
        } else {
            alert(errorThrown);
        }
    });
};
/** Se usa en el edit de Becado*/
function ajaxDniEdicion() {
    var dni = document.getElementById('becasmds_personabundle_becado_dni').value;
    $.ajax({
        url: Routing.generate('ajax_dni', {dni: dni}),
        dataType: 'json',
        type: 'post'
    })
    .done(function (data) {
        if (data.respuesta !== 'no_existe') {
            var message = "El nro. de documento ya pertenece a otra persona, por favor verifique el nro. o contáctese con el administrador.";
            var Tittle = "Aviso";
            dalert.alert(message, Tittle, {
                messageFontColor: 'white',
                messageBgColor: 'rgb(119, 49, 134)',
                tittleBgColor: 'black',
                tittleFontColor: 'white'
            });
        }
        else {
            var message = "El nro. de documento no está asignado, continúe con la carga.";
            var Tittle = "Aviso";
            dalert.alert(message, Tittle, {
                messageFontColor: 'white',
                messageBgColor: 'rgb(119, 49, 134)',
                tittleBgColor: 'black',
                tittleFontColor: 'white'
            });
        }
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        if (typeof jqXHR.responseJSON !== 'undefined') {
            if (jqXHR.responseJSON.hasOwnProperty('form')) {
                $('#form_body').html(jqXHR.responseJSON.form);
            }
            $('.form_error').html(jqXHR.responseJSON.message);
        } else {
            alert(errorThrown);
        }
    });
};