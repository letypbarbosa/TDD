<?php


require "Equacao2grau.php";


class EquacoesTest extends PHPUnit_Framework_TestCase
{

    public function testConstruct(){

        $eq2g = new Equacao2grau(1, 2, 3);

        $this->assertEquals(1, $eq2g->a);
        $this->assertEquals(2, $eq2g->b);
        $this->assertEquals(3, $eq2g->c);
    }


    public function testSetDelta(){

        $eq2g = new Equacao2grau(1, -4, 3);
        $eq2g->setDelta();
        $this->assertEquals(4, $eq2g->delta);

        $eq2g = new Equacao2grau(2, -4, 2);
        $eq2g->setDelta();
        $this->assertEquals(0, $eq2g->delta);
    }

    public function testCalcular(){

        $eq2g = new Equacao2grau(1, -4, 3);
        $eq2g->calcular();
        $this->assertEquals(3, $eq2g->raiz1);
        $this->assertEquals(1, $eq2g->raiz2);


        $eq2g = new Equacao2grau(2, -4, 2);
        $eq2g->calcular();
        $this->assertEquals(1, $eq2g->raiz1);
        $this->assertEquals(1, $eq2g->raiz2);


    }

}
?>