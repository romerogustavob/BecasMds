/* Implentación de Agregar Formularios y remover formularios */
collectionFormacionHolder = jQuery('.formacion');
collectionFormacionHolder.data('index', collectionFormacionHolder.find(':input').length);
jQuery('.add-formacion-form').click(function(e) {
    e.preventDefault();
    addForm(jQuery(this).parent().find('.formacion'), jQuery(this).parent().find('.formacion'));
})
jQuery('.formacion').delegate('.delete-form','click', function(e) {
    e.preventDefault();
    deleteRow(this);
});
