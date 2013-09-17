<?php
class Operacoes{
   
    public  $a;
    public  $b;
    public  $c;
    public  $delta;
    public  $raiz;
    public  $valor1;
    public  $valor2;

    # Retorna o valor de delta
    public function valorDelta(){
        $this->delta = ( $this->b * $this->b ) - 4 *$this->a * $this->c;
        return $this->delta;
    }

    # Retorna o valor da raiz
    public function valorRaiz( $valorDelta ){
        return $this->raiz = sqrt( $valorDelta );
    }
    
    # Retorna o primeiro valor
    public function valor1 ( $vb, $vraiz, $va ){
        return $this->valor1 = ( -$vb + $vraiz ) / ( 2 * $va);
    }
    
    # Retorna o segundo valor
    public function valor2 ( $vb, $vraiz, $va ){
        return $this->valor2 = ( -$vb - $vraiz ) / ( 2 * $va);
    }
}

?>

