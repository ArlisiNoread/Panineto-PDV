function addButton (item) {
        var number = $('#cantidad-' + item).attr('placeholder');
        var numberConverted = parseInt(number) + 1;
        var final = "" + numberConverted;
        $('#cantidad-' + item).attr('placeholder',final);
    }


function restButton (item) {
        var number = $('#cantidad-' + item).attr('placeholder');
        var numberConverted = parseInt(number) - 1;
        var final = "" + numberConverted;
        if(numberConverted >= 0){
             $('#cantidad-' + item).attr('placeholder',final);
           }
    }

function actualizarTotal (item) {
        var cantidad = parseInt($('#cantidad-' + item).attr('placeholder'));
        
        var final = "" + numberConverted;
        if(numberConverted >= 0){
             $('#cantidad-' + item).attr('placeholder',final);
           }
    }