$(document).ready(function() {
$('input').select2({
        multiple: true,
        minimumInputLength: 2,
        ajax: {
            url: '/localidadAjax',
            dataType: 'json',
            data: function (term) {
                return {
                    q: term
                };
            },
            results: function (data) {
                return { results: data };
            }
        },
        formatResult: function(object) {
            return object.name;
        },
        formatSelection: function(object) {
            return object.name;
        },
        initSelection: function(element, callback) {
            var ids=$(element).val();
            if (ids !== '') {
                $.ajax('/getlocalidad/' + ids, {
                    dataType: 'json'
                }).done(function(data) { callback(data); });
            }
        }
    });
});