function addCheckItem(x, nombre, acompanamiento, precio) {
    var ret = "";
    var Ret = "<h4>" + (x + 1) + ": " + nombre + " " +
            acompanamiento + " $" + precio + "</h4>" +
            '<button id="remove-' + x + 
            '" type="button" class="btn">-</button>';

    ret = '<div class="row">';
    ret +=  '<div class="col-10">';
    ret +=      "<h4>" + (x + 1) + ": " + nombre + " ";
    ret +=      acompanamiento + " $" + precio + "</h4>";
    ret +=  '</div>'
    ret +=  '<div class="col-2">';
    ret +=      '<button id="boton-remove-' + x ;
    ret +=      '" type="button" class="btn">-</button>';
    ret +=  '</div>'


    return ret;
}