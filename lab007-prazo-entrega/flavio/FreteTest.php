<?php

require 'Frete.php';

class FreteTest extends PHPUnit_Framework_Testcase {


    function testPrazoEntregaLocal(){
        $frete = new Frete();
        $origem = "SP";
        $destino = "SP";
        $prazo = $frete->prazoDestino($origem, $destino);

        $this->assertEquals("Entrega em 5 dias", $prazo);
    }

    function testPrazoEntregaForaEstado(){
        $frete = new Frete();
        $origem = "SP";
        $destino = "BA";
        $prazo = $frete->prazoDestino($origem, $destino);

        $this->assertEquals("Entrega em 15 dias", $prazo);
    }

}

?>
