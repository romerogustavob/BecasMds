/* Implentación de Agregar Formularios y remover formularios */
collectionDomicilioHolder = jQuery('.domicilio');
collectionDomicilioHolder.data('index', collectionDomicilioHolder.find(':input').length)
jQuery('.add-domicilio-form').click(function(e) {
    e.preventDefault();
    addFormulario(jQuery(this).parent().find('.domicilio'), jQuery(this).parent().find('.domicilio'));
})
jQuery('.domicilio').delegate('.delete-form','click', function(e) {
    e.preventDefault();
    deleteRow(this);
});

