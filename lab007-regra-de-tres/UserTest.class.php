<?php

/*
 * Testes
 */


require_once "PHPUnit/Autoload.php";
require_once "./User.class.php";

/**
 * 
 */
class UserTest extends PHPUnit_Framework_TestCase {
    
    public function setUp() {
        $this->User = new User();
    }
    
    public function testInstanceOf(){
        
        $this->assertInstanceOf("User", $this->User);        
        
        $this->User->setNome("Gabriel");
        $this->assertEquals("Gabriel", $this->User->getNome());

    }
}
?>
