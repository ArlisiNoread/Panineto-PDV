$(":button").click(function () {
    //alert("Text: " + this.id);

    var data;


    if (this.id != "checkout") {
        data = $.parseJSON($(this).attr('data-button'));
        
        itemsCarrito.push(data);
        
        alert(itemsCarrito[0].nombre);
    }
});