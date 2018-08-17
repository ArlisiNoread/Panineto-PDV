$(":button").click(function () {
    //alert("Text: " + this.id);

    var data;

    //alert(this.id);

    if (this.id.includes("boton-add")) {
        data = $.parseJSON($(this).attr('data-button'));

        itemsCarrito.push(data);
        $('#checkout').text("Carrito: " + itemsCarrito.length);
    } else if (this.id.includes("boton-remove")) {
        var split = this.id.split("-");
        var index = split[split.length - 1];
        itemsCarrito.splice(itemsCarrito.length, index);

        $("#masInformacion-flotante-inner").empty();
        var total = 0;
        for (x = 0; x < itemsCarrito.length; x++) {

            $("#masInformacion-flotante-inner").append(addCheckItem(
                    x, itemsCarrito[x].nombre, itemsCarrito[x].acompanamiento, itemsCarrito[x].precio));

            total += Number(itemsCarrito[x].precio);
        }
        $("#masInformacion-flotante-inner").append("<h4>" + "Costo total: $" + total + "</h4>");
        $("#masInformacion-flotante-inner").append('<button id="sendEmail" type="button" class="btn btn-success">Success</button>');

    } else if (this.id == "sendEmail") {

        console.log("Email Activado")
        alert("Email Activado");
        $.post('./phpfiles/mailCodeScript.php', itemsCarrito, function () {
            content.html(response);
        });
    }
});


$(document).on('click', '.btn', function () {
    if (this.id.includes("boton-remove")) {
        var split = this.id.split("-");
        //console.log(split);
        var index = Number(split[split.length - 1]);
        console.log(itemsCarrito.length + " " + index);
        itemsCarrito.splice(index, 1);
        //console.log(itemsCarrito.length + " " + index);


        $("#masInformacion-flotante-inner").empty();
        var total = 0;
        for (x = 0; x < itemsCarrito.length; x++) {

            $("#masInformacion-flotante-inner").append(addCheckItem(
                    x, itemsCarrito[x].nombre, itemsCarrito[x].acompanamiento, itemsCarrito[x].precio));

            total += Number(itemsCarrito[x].precio);
        }
        $("#masInformacion-flotante-inner").append("<h4>" + "Costo total: $" + total + "</h4>");
        $("#masInformacion-flotante-inner").append('<button id="sendEmail" type="button" class="btn btn-success">Success</button>');

    } else if (this.id == "sendEmail") {

        console.log("Email Activado")
        alert("Email Activado");
//        $.post('./phpfiles/mailCodeScript.php', itemsCarrito, function () {
//            
//            console.log(content.html(response));
//        });
        alert(JSON.stringify(itemsCarrito));
        request = $.ajax({
            url: "./phpfiles/mailCodeScript.php",
            type: "post",
            data: {"json" : JSON.stringify(itemsCarrito)},
            success: function (respuesta) {
                console.log(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }

        });



    }

});