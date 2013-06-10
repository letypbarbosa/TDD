<?php

require 'Fatura.php';

class FaturaTest extends PHPUnit_Framework_Testcase {

    function testVerificaPagtoAtrasado() {

        $fatura = new Fatura();
        
        $dt_vencto = "25/11/2010";
        $dt_pagto = "30/11/2010";
        $resp = $fatura->verificaPagto($dt_vencto, $dt_pagto);
        $this->assertEquals("Pagto feito com atraso de 5 dias", $resp);

        $dt_vencto = "10/04/2011";
        $dt_pagto = "10/05/2011";
        $resp = $fatura->verificaPagto($dt_vencto, $dt_pagto);
        $this->assertEquals("Pagto feito com atraso de 30 dias", $resp);
    }
    function testEmDia() {

        $fatura = new Fatura();
        
        $dt_vencto = "01/11/2010";
        $dt_pagto = "01/11/2010";
        $resp = $fatura->verificaPagto($dt_vencto, $dt_pagto);
        $this->assertEquals("pagto deve ter sido feito em dia", $resp);
    }
    function testEmUmDiaAtrasad() {

        $fatura = new Fatura();
        
        $dt_vencto = "27/12/2010";
        $dt_pagto = "28/12/2010";
        $resp = $fatura->verificaPagto($dt_vencto, $dt_pagto);
        $this->assertEquals("Pagto feito com atraso de 1 dia", $resp);
    }

}

?>
