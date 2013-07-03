<?php

class Vetores {

    private $vetor30;
    private $vetor20;

    /**
     * Vetor30
     */
    function setVetorTrinta($valor = null) {
        if ($valor) {
            $this->vetor30 = $valor;
        } else {
            for ($i = 0; $i < 30; $i++) {
                $this->vetor30[] = rand(1, 100);
            }
        }
    }

    function getVetorTrinta() {
        return $this->vetor30;
    }

    /**
     * vetor 20
     */
    function setVetorVinte($valor = null) {
        if ($valor) {
            $this->vetor20 = $valor;
        } else {
            for ($i = 0; $i < 20; $i++) {
                $this->vetor20[] = rand(1, 100);
            }
        }
    }

    function getVetorVinte() {
        return $this->vetor20;
    }

    /**
     *
     * @param type $param
     * @return boolean
     */
    function eImpar($param) {

        if (($param % 2 ) != 0) {
            return true;
        }

        return false;
    }

    /**
     *
     * @param type $param
     * @return boolean
     */
    function ePar($param) {

        if (($param % 2 ) == 0) {
            return true;
        }

        return false;
    }

    /**
     *
     * @param type $param
     * @return boolean
     */
    function ePrimo($param) {

        if ($param == 0 || $param == 1) {
            return false;
        }

        for ($i = ($param - 1); $i > 1; $i--) {
            if (($param % $i) == 0) {
                return false;
                break;
            }
        }

        return true;
    }

    /**
     * 
     * @return type
     */
    function getRespPrimeiroVetor() {

        $resp = array();

        foreach ($this->vetor30 as $valor) {
            if ($this->ePar($valor)) {
                $resp[] = $valor;
            }
        }

        return $resp;
    }

    
    /**
     * 
     * @return type
     */
    function getRespSegundoVetor() {

        $resp = array();

        foreach ($this->vetor20 as $valor) {
            if ($this->eImpar($valor)) {
                $resp[] = $valor;
            }
        }

        return $resp;
    }    
    
    
    
    function getRespTerceiroVetor() {
        $resp = array();

        foreach ($this->vetor30 as $valor) {
            if ($this->ePrimo($valor)) {
                $resp[] = $valor;
            }
        }
        
        foreach ($this->vetor20 as $valor) {
            if ($this->ePrimo($valor)) {
                $resp[] = $valor;
            }
        }

        return $resp;        
    }
    
}

?>
