<?php

require 'Vetores.php';

class VetoresTest extends PHPUnit_Framework_Testcase {

    function testCarregar() {

        $vetores = new Vetores();

        $vetores->setVetorTrinta();
        $resp = count($vetores->getVetorTrinta());
        $this->assertEquals(30, $resp);

        $vetores->setVetorVinte();
        $resp = count($vetores->getVetorVinte());
        $this->assertEquals(20, $resp);
        
        $vetores->setVetorTrinta(array(1, 2, 3));
        $resp = count($vetores->getVetorTrinta());
        $this->assertEquals(3, $resp);

        $vetores->setVetorVinte(array(1, 2, 3));
        $resp = count($vetores->getVetorVinte());
        $this->assertEquals(3, $resp);        
        
    }

    function test_eImpar() {
        $vetores = new Vetores();
        
        $this->assertTrue($vetores->eImpar(1));
        $this->assertTrue($vetores->eImpar(3));
        $this->assertTrue($vetores->eImpar(5));
        $this->assertTrue(!$vetores->eImpar(6));
        $this->assertTrue($vetores->eImpar(7));
        
    }

    function test_ePar() {
        $vetores = new Vetores();
        
        $this->assertTrue(!$vetores->ePar(1));
        $this->assertTrue($vetores->ePar(2));
        $this->assertTrue(!$vetores->ePar(5));
        $this->assertTrue($vetores->ePar(6));
        $this->assertTrue(!$vetores->ePar(7));
        
    }

    function test_ePrimo() {
        $vetores = new Vetores();
                
        $this->assertTrue($vetores->ePrimo(2));
        $this->assertTrue($vetores->ePrimo(3));
        $this->assertTrue($vetores->ePrimo(5));
        $this->assertTrue($vetores->ePrimo(7));
        $this->assertTrue($vetores->ePrimo(11));
        $this->assertTrue($vetores->ePrimo(13));
        $this->assertTrue($vetores->ePrimo(17));
        $this->assertTrue($vetores->ePrimo(19));
        $this->assertTrue($vetores->ePrimo(23));
        $this->assertTrue($vetores->ePrimo(29));
        $this->assertTrue($vetores->ePrimo(31));
        $this->assertTrue($vetores->ePrimo(37));
        $this->assertTrue($vetores->ePrimo(41));

        $this->assertTrue(!$vetores->ePrimo(0));
        $this->assertTrue(!$vetores->ePrimo(1));
        $this->assertTrue(!$vetores->ePrimo(4));
        $this->assertTrue(!$vetores->ePrimo(6));
        $this->assertTrue(!$vetores->ePrimo(8));
        $this->assertTrue(!$vetores->ePrimo(9));
        $this->assertTrue(!$vetores->ePrimo(10));
        
    }

    function testPrimeiroVetorPar() {
        $vetores = new Vetores();
        $vetores->setVetorTrinta(array(6, 7, 21));
        $vetores->setVetorVinte(array(11, 12, 13));

        $arr = $vetores->getRespPrimeiroVetor();

        $this->assertEquals(6, $arr[0]);
        
    }

    function testSegundoVetorImpar() {

        $vetores = new Vetores();
        $vetores->setVetorTrinta(array(6, 7, 21));
        $vetores->setVetorVinte(array(11, 12, 13));

        $arr = $vetores->getRespSegundoVetor();

        $this->assertEquals(11, $arr[0]);
        $this->assertEquals(13, $arr[1]);
    }

    function testTerceiroVetorPrimos() {

        $vetores = new Vetores();
        $vetores->setVetorTrinta(array(6, 7, 21));
        $vetores->setVetorVinte(array(11, 12, 13));

        $arr = $vetores->getRespTerceiroVetor();

        $this->assertEquals(7, $arr[0]);
        $this->assertEquals(11, $arr[1]);
        $this->assertEquals(13, $arr[2]);
    }

}

?>
