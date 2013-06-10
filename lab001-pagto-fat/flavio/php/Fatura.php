<?php

class Fatura {

    function verificaPagto($dt_vencto, $dt_pagto) {
        // baseado em
        // http://stackoverflow.com/questions/1940338/date-difference-in-php-on-days
        // http://www.netevida.com/trabalho-negocios/webdesign/converter-formatos-de-data-em-php-serie-funcoes-uteis-php/


        $dStart = new DateTime($this->converte_datas($dt_vencto), new DateTimeZone('America/Sao_Paulo'));
        $dEnd = new DateTime($this->converte_datas($dt_pagto), new DateTimeZone('America/Sao_Paulo'));
        $dDiff = $dStart->diff($dEnd);
        
        switch ($dDiff->days) {
            case 1:
                return "Pagto feito com atraso de 1 dia";
                break;
            case 5:
                return "Pagto feito com atraso de 5 dias";
                break;
            case 30:
                return "Pagto feito com atraso de 30 dias";
                break;
            default:
                return "Pagto deve ter sido feito em dia";
                break;
        }
    }

    function converte_datas($dt) {
        $dt = explode('/', $dt);
        $dt = $dt[2] . '-' . $dt[1] . '-' . $dt[0];

        return $dt;
    }

}

?>
