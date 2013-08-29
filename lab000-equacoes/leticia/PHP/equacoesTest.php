<?php

/**
 * Incluir a class operacoes
 */
require 'operacoes.class.php';

Class Equacao extends PHPUnit_Framework_TestCase {

    # Declaraçao de objetos das equaçoes
    public $EqA  = array (  1,   2,  -1,   1,   3,   2 );
    public $EqB  = array ( -4,  -4,   1,  -2,   0,  -5 );
    public $EqC  = array (  3,   2,   2,  -0,  -27,  4 );

    # Retorno dos valores de cada equacao, NAN = enexistente 
    public $Del  = array ( 4,    0,   9,   4,  324, -7    );
    public $raiz = array ( 2,    0,   3,   2,  18,  "NAN" );
    public $X1   = array ( 3,    1,  -1,   2,  3,   1.25  );
    public $X2   = array ( 1,    1,   2,   0, -3,   1.25  );

    
    # Saber o valor de Delta 
    public function testValorDelta(){
        for( $x = 0; $x < 6; $x++ ){
            $mod = new Operacoes();
            $mod->a = $this->EqA[$x];
            $mod->b = $this->EqB[$x];
            $mod->c = $this->EqC[$x];
            $mod->valorDelta();

            $this->assertEquals( $this->Del[$x], $mod->delta );
        }
     }
   
     
    # Saber o valor da raiz 
    public function testValorRaiz(){
        for( $x = 0; $x < 6; $x++ ){
            $mod = new Operacoes();
            $mod->valorRaiz( $this->Del[$x] );

            $this->assertEquals( $this->raiz[$x], $mod->raiz );
        }
    }

    
    # Saber o primeiro valor
    public function testValor1(){
        for( $x = 0; $x < 6; $x++ ){
            $mod = new Operacoes();
            $mod->valor1(  $this->EqB[$x], $this->raiz[$x], $this->EqA[$x] );
            
             $this->assertEquals( $this->X1[$x], $mod->valor1 );
        }
    }
    
    
    # Saber o segundo valor
    public function testValor2(){
        for( $x = 0; $x < 6; $x++ ){
            $mod = new Operacoes();
            $mod->valor2( $this->EqB[$x], $this->raiz[$x], $this->EqA[$x] );

            $this->assertEquals( $this->X2[$x], $mod->valor2 );
        }
    }
}
?>