<?php

/**
 *
 *
 */
class Frete {

    function prazoDestino($origem, $destino) {
        if ($origem === $destino) {
            return "Entrega em 5 dias";
        } else {
            return "Entrega em 15 dias";
        }
    }

}

?>