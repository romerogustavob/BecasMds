//$(document).ready(function() {
function encontrar_localidad(idLocalidad){
$("#"+idLocalidad).select2({
    multiple: true,
    minimumInputLength: 2,
    ajax: {
        url: Routing.generate('localidad_ajax'),
        dataType: 'json',
        data: function (term) {
            return {
                q: term
            };
        },
        results: function (data) {
            return {results: data};
        }
    },
    formatResult: function (object) {
        return object.name;
    },
    formatSelection: function (object) {
        return object.name;
    },
    initSelection: function (element, callback) {
        var ids = $(element).val();
        if (ids !== '') {
            $.ajax(Routing.generate('localidad_id_ajax') + ids, {
                dataType: 'json'
            }).done(function (data) {
                callback(data);
            });
        }
    }
});
}
//});