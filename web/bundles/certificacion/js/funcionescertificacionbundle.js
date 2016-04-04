/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function totalPagar()
{
    var descuento = parseFloat(document.getElementById('becasmds_certificacionbundle_certificacion_descuentoDias').value);
    var montoPagar = 0;
    var montoBeca = parseFloat(document.getElementById('becasmds_certificacionbundle_certificacion_monto').value);
    var fecha = document.getElementById('becasmds_certificacionbundle_certificacion_mesCertificacion').value;

    parts = fecha.split("-");
    var date = new Date(parts[2], parts[1], parts[0]);
    //parts[2] devuelve el año-parts[1] devuelve el mes - parts[0] devuelve el día
    var cantidadDiasMes = daysInMonth(parts[1], parts[2]);
    if (descuento !== "" && descuento > 0) {
        montoPagar = montoBeca - ((descuento * montoBeca) / cantidadDiasMes);
        //asigno el monto truncando a 3 decimales
        document.getElementById('becasmds_certificacionbundle_certificacion_totalPagar').value = montoPagar.toFixed(3);
        alert("El nuevo monto a pagar es: " + montoPagar.toFixed(3));
    }
    else {

        document.getElementById('becasmds_certificacionbundle_certificacion_totalPagar').value = montoBeca.toFixed(3);
    }

}
function daysInMonth(humanMonth, year) {
    return new Date(year || new Date().getFullYear(), humanMonth, 0).getDate();
}



