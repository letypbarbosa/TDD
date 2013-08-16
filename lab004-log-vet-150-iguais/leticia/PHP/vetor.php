<?php
require_once "objVetor.php";

Class Vetor extends PHPUnit_Framework_TestCase {

	public function testGetVetor(){
            $objvetor = new ObjVetor();
            $vetor = $objvetor->montarVetor();
            $result = count($vetor);
            
            $this->assertCount(150, $vetor );
	}
        
        
        public function testGetKey(){
            $objvetor = new ObjVetor();
            $objvetor->vetor = array(1,2,9,30,19,25,30,50,26,30);
            
            foreach ( $objvetor->verificarContadores() as $key ){
               $val[] = $key; 
            }
            
            # Posição de chave 3
            $this->assertEquals(3, $val[0] );
            
            # Posição de chave 6
            $this->assertEquals(6, $val[1] );
            
            # Posição de chave 9
            $this->assertEquals(9, $val[2] );
        }
}
?>