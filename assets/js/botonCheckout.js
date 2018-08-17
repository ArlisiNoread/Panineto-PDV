$(document).ready(function () {
    $("#checkout").click(function () {

        $("#masInformacion-flotante-inner").empty();

        var total = 0;
        for (x = 0; x < itemsCarrito.length; x++) {

            $("#masInformacion-flotante-inner").append(addCheckItem(
                    x, itemsCarrito[x].nombre , itemsCarrito[x].acompanamiento, itemsCarrito[x].precio));

            total += Number(itemsCarrito[x].precio);
        }

        $("#masInformacion-flotante-inner").append("<h4>" + "Costo total: $" + total + "</h4>");

        $("#masInformacion-flotante-inner").append('<button id="sendEmail" type="button" class="btn btn-success">Success</button>');


        $('#masInformacion-flotante').css({
            'z-index': '550',
            'visibility': 'visible',
            'opacity': '1',
            '-webkit-transition': 'visibility 0s linear 0s, opacity 600ms', /* Safari */
            'transition': 'visibility 0s linear 0s, opacity 600ms'
        });

    });






    $("#boton-cerrado-masInformacion-flotante").click(function () {

        $('#masInformacion-flotante').css({
            'z-index': '-550',
            'visibility': 'hidden',
            'opacity': '0',
            '-webkit-transition': 'visibility 0s linear 300ms, opacity 300ms', /* Safari */
            'transition': 'visibility 0s linear 300ms, opacity 300ms'
        });

    });
});

$('body').on('click', '#sendEmail', function () {
    console.log("Email Activado")
    //alert("Email Activado");
    $.post('./phpfiles/mailCodeScript.php', itemsCarrito, function () {
        content.html(response);
    });
});