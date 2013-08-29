<?php

/**
 * 
 */
require_once "RegraDeTres.class.php";


/**
 * 
 */
class UserTest extends PHPUnit_Framework_TestCase {
    
    
    public function setUp() {
        $object = new RegraDeTres();
        $this->assertInstanceOf("RegraDeTres", $object);
    }
    
    public function testValor(){
        $object = new RegraDeTres();
        
        $object->setValor(200);
        $this->assertEquals(200, $object->getValor());
    }
    
    public function testPercentual(){
        $object = new RegraDeTres();
        
        $object->setPercentual(20);
        $this->assertEquals(20, $object->getPercentual());
    }
    
    public function testResultado(){
        $object = new RegraDeTres();
        
        $object->setValor(200);
        $object->setPercentual(20);
        $this->assertEquals(40, $object->getResultado());
    }
}
?>
