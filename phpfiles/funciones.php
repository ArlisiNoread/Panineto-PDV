<?php

function agregaScript($id) {
    ?>
    <script>
        $(document).ready(function () {
            $("#<?php echo $id ?>").click(function () {
                console.log("Clikeado");

                alert("button");
            });
        });
    </script>
    <?php
}

function agregaPaniniMediano() {
    
}
?>
