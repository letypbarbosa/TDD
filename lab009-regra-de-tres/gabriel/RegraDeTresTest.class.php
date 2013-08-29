<?php

/*
 * Testes
 */


require_once "PHPUnit/Autoload.php";
require_once "./RegraDeTres.class.php";

/**
 * 
 */
class UserTest extends PHPUnit_Framework_TestCase {
    
    private $valor      = 30;  # valor total
    private $percentual = 20;  # percentual desejado    
    private $resultado  = 6;   # resultado esperado
    
    public function setUp() {
        $this->object = new RegraDeTres();
    }
    
    public function testInstanceOf(){
        $this->assertInstanceOf("RegraDeTres", $this->object);
    }
    
    public function testValor(){
        $this->object->setValor($this->valor);
        $this->assertEquals($this->valor, $this->object->getValor());
    }
    
    public function testPercentual(){
        $this->object->setPercentual($this->percentual);
        $this->assertEquals($this->percentual, $this->object->getPercentual());
    }
    
    public function testResultado(){
        $this->object->setValor($this->valor);
        $this->object->setPercentual($this->percentual);
        $this->assertEquals($this->resultado, $this->object->getResultado());
    }
}
?>
