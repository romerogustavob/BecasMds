/**
* Agregar formulario
*
* @param collectionHolder variable global sotiene el prototype
* @param $target          el DOM donde se inserta
* @param regName          Si tenemos un nested embebido no vamos a poder usar 
* el __name__ por que sería reemplazado en todos este es un agregado mio 
* ya que a través de este parámetro podemos agregar la expreción desearamos 
* reemplazar en cada embed form
*
* @return void
*/
function triggerJavascript(id)
{
    $field = $('#' + id);
    {{ form_javascript(form.domicilio.vars.prototype.localidad, true) }}
}

function addForm(collectionHolder, target, regName) {
    /*Obtien el data-prototype*/
    var prototype = collectionHolder.data('prototype');

    /*Obtiene el valor del index actual*/
    var index = collectionHolder.data('index');
    var id = '{{ form.domicilio.vars.id }}_' + id;
    /*Reemplaza el valor '__name__' en el HTML del prototype por el número
    según la cantidad de items que tengamos*/
    if (regName == null) {
        regName = /__name__/g;
    }
    var newForm = prototype.replace(regName, index);
    /*incrementa el indice con uno por cada item que agregáramos*/
    collectionHolder.data('index', index + 1);
    /*Agrega el formulario al DOM*/
    target.append(newForm);
    var id = '{{ form.tags.vars.id }}_' + id;
}
