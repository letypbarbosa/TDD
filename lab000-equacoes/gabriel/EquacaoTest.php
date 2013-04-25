<?php 
/**
 * 
 */

require 'Equacao.php';

class EquacaoTest extends PHPUnit_Framework_Testcase{
    
    # Objeto da equacao
    private $eq;    
    
    function EquacaoTest(){
        $this->eq = new Equacao($a=2, $b=5, $c=2);
    }

    public function testDelta(){

        $delta = $this->eq->getDelta();
        $this->assertEquals(9, $delta);        
    }
    
    public function testX(){
        
        $x1 = $this->eq->getX1();
        $x2 = $this->eq->getX2();
        
        $this->assertEquals(-0.5, $x1);
        $this->assertEquals(-2, $x2);
    }
    
    public function testVertice(){

        $Xv = $this->eq->getXv();
        $Yv = $this->eq->getYv();
        
        $this->assertEquals(-1.25, $Xv);        
        $this->assertEquals(-1.125, $Yv);
    }
}
?>
