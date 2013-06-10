<?php

class Vetor {

    private $vetor;
    private $iguais30;

    /**
     * 
     * @return type
     */
    function getVetor() {
        return $this->vetor;
    }

    /**
     * 
     * @param type $vetor
     */
    function setVetor($vetor) {
        $this->vetor = $vetor;
    }

    /**
     * 
     */
    function carregar() {

        for ($i = 0; $i < 150; $i++) {
            $this->vetor[] = rand(1, 50);
        }
        
    }

    /**
     * 
     * @return boolean
     */
    function possueIguais30() {
        
        foreach ($this->vetor as $valor) {
            if ($valor == 30) {
                return true;
            }
        }
        
    }
    
    /**
     * 
     * @return type
     */
    function getIguais30() {
        
        foreach ($this->vetor as $posicao => $valor) {
            if ($valor == 30) {
                $this->iguais30[] = $posicao; 
            }
        }
        
        return $this->iguais30;
        
    }

}

?>