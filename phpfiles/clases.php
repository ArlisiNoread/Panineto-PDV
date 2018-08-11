<?php

class itemGeneral {

    var $nombre;
    var $insumoPrincipal;
    var $acompanante;
    var $precioNormal;
    var $precioEspecial;
    
    function __construct($nombre, $insumoPrincipal, $acompanante, $precioNormal, $precioEspecial) {
        $this->nombre = $nombre;
        $this->insumoPrincipal = $insumoPrincipal;
        $this->acompanante = $acompanante;
        $this->precioNormal = $precioNormal;
        $this->precioEspecial = $precioEspecial;
    }

}

?>
