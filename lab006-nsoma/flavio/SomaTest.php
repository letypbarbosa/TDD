<?php

require 'Soma.php';

class SomaTest extends PHPUnit_Framework_Testcase {
  
    
    function test(){
        
        $soma = new Soma();
        
        $this->assertEquals(2, $soma->resultado(1));
        $this->assertEquals(2.75, $soma->resultado(2));
        $this->assertEquals(3.1944444444444, $soma->resultado(3));
        $this->assertEquals(3.5069444444, $soma->resultado(4));
        
    }
    
}

?>
