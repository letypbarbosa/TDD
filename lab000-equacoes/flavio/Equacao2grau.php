<?php

/**
 *
 */

/**
 *
 */
class Equacao2grau {

    public $a;
    public $b;
    public $c;

    public $delta;
    public $raiz1;
    public $raiz2;


    /**
     *
     * @param type $a
     * @param type $b
     * @param type $c
     */
    public function Equacao2grau($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }


    /**
     *
     */
    public function setDelta(){
        $this->delta = ($this->b * $this->b) - 4 * $this->a * $this->c;
    }

    /**
     *
     */
    public function calcular(){

        $this->setDelta();
        $raiz_delta = sqrt($this->delta);

        $this->raiz1 = (- $this->b + $raiz_delta) / (2 * $this->a);
        $this->raiz2 = (- $this->b - $raiz_delta) / (2 * $this->a);
    }


}
?>