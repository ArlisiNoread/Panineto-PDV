<!-- Lista de Paninis -->
<div class="container-fluid listaArticulos">
    <a href="#paninis" class="" data-toggle="collapse" style="">
        <div class="container-fluid headerLista">
            <p class="Paninis">Paninis</p>
        </div>
    </a>
    <div id="paninis" class="collapse">
        <!-- Todos los Paninis-->


        <?php
        $x = 0;
        foreach ($paninisGrandes as $key) {
            ?>
            <!-- Un Item -->            
            <div class="innerdiv" >
                <div class="row fondobeige">
                    <div class="col-7 col-xs-11 col-sm-9 col-modificado3">

                        <!-- Nombre Producto -->
                        <p><b><?php echo $key->acompanante; ?></b></p>

                    </div>
                    <div class="col-5 col-xs-1 col-sm-3 " >

                        <!-- Boton Lista Desplegable -->
                        <div class="div-boton-expansor">
                            <a href="#paniniSelector-<?php echo $x; ?>" class="" data-toggle="collapse">
                                <div class="container botonExpansor">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Opciones Desplegadas -->
                <div id="paniniSelector-<?php echo $x; ?>" class="collapse">
                    <div class="row">
                        <div class="col col-sm-6 col-modificado1">
                            <p>Grande</p>
                        </div>
                        <div class="col col-sm-4 col-modificado2">
                            <p>$<?php echo $key->precioNormal; ?></p>
                        </div>
                        <div class="col col-sm-2 desplazamiento-boton">
                            <button id="boton-add-<?php echo $x; ?>" type="button" class="btn btn-modificado"><i class="fas fa-plus"></i></button>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col col-sm-6 col-modificado1">
                            <p>Mediano</p>
                        </div>
                        <div class="col col-sm-4 col-modificado2">
                            <p>$<?php echo $paninisMedianos[$x]->precioNormal; ?></p>
                        </div>
                        <div class="col col-sm-2 desplazamiento-boton">
                            <button type="button" class="btn btn-modificado"><i class="fas fa-plus"></i></button>
                        </div>

                    </div>
                </div>
            </div>

            <?php
            $x++;
        }
        ?>

    </div>
</div>
<!-- Termina Lísta de Paninis -->