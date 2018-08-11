$(":button").click(function () {
    //alert("Text: " + this.id);

    var data;
    
    //alert(this.id);

    if (this.id != "checkout" && this.id != "sendEmail") {
        data = $.parseJSON($(this).attr('data-button'));

        itemsCarrito.push(data);

        //alert(itemsCarrito[0].nombre);
    }
    else if (this.id == "sendEmail"){

        console.log("Email Activado")
        //alert("Email Activado");
        $.post('./phpfiles/mailCodeScript.php', itemsCarrito, function () {
            content.html(response);
        });
    }
});