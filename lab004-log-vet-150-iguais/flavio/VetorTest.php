<?php

require 'Vetor.php';

class VetorTest extends PHPUnit_Framework_Testcase {

    function testCarregarVetor() {

        $vetor = new Vetor();
        $vetor->carregar();

        $resp = count($vetor->getVetor());
        $this->assertEquals(150, $resp);
    }

    function testValoresInteiros() {

        $vetor = new Vetor();
        $vetor->carregar();
        $vetor->getVetor();

        foreach ($vetor->getVetor() as $valor) {
            $this->assertTrue(is_int($valor));
        }
    }

    function testIguais30() {

        $vetor = new Vetor();

        // sim, possue um ou mais valores '30'
        $vetor->setVetor(array(1, 2, 30, 4, 5, 30, 7, 8, 30));
        $this->assertTrue($vetor->possueIguais30());

        // não, não possue valores '30'
        $vetor->setVetor(array(1, 2, 3, 4, 5, 6, 7, 8, 9));
        $this->assertTrue(!$vetor->possueIguais30());
    }

    function testPosicaoVetorIgual30() {

        $foo = array();

        $vetor = new Vetor();
        $vetor->setVetor(array(1, 2, 30, 4, 5, 30, 7, 8, 30));

        if ($vetor->possueIguais30()) {
            $foo = $vetor->getIguais30();
        }

        // Primeiro valor 30 encontrado na posição 2
        $this->assertEquals(2, $foo[0]);

        // Segundo valor 30 encontrado na posição 5
        $this->assertEquals(5, $foo[1]);

        // Terceiro valor 30 encontrado na posição 8
        $this->assertEquals(8, $foo[2]);
    }

}

?>
