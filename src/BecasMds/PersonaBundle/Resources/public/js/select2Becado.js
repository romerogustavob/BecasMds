$(document).ready(function() {
$('.select2-localidad').select2({
    placeholder: "Buscar Localidad",
    allowClear: true
});
$('.select2-barrio').select2({
    placeholder: "Buscar Barrio",
    allowClear: true
});
$('.select2-calle').select2({
    placeholder: "Buscar Calle",
    allowClear: true
});
$('.select2-referente').select2({
    placeholder: "Buscar Referente",
    allowClear: true
});
$('.select2-lugarAfectacion').select2({
    placeholder: "Buscar Lugar",
    allowClear: true
});
$('.select2-dependencia').select2({
    placeholder: "Buscar Dependencia",
    allowClear: true
});
jQuery('.inputUpper').keyup(function(){
    this.value = this.value.toUpperCase();
});
});