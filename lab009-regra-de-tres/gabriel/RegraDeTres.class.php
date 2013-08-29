<?php

/**
 * 
 */
class RegraDeTres {
    
    private $valor;       # valor do todo (ex: 200 caixas)
    private $percentual;  # percentual desejado (ex: 20% de 200 caixas)
    
    
    /**
     * Setters
     * 
     * @param type $valor
     */
    public function setValor($valor){
        $this->valor = $valor;
    }
    
    public function setPercentual($percentual){
        $this->percentual = $percentual;
    }
    
    
    /**
     * Getters
     * 
     * @return type
     */
    public function getValor(){
        return $this->valor;
    }
    
    public function getPercentual(){
        return $this->percentual;
    }

    public function getResultado(){
        return $this->valor * $this->percentual / 100;
    }
}  

//Implementação
//$object = new RegraDeTres();
//$object->setValor(200);
//$object->setPercentual(20);
//
//echo $object->getResultado();
?>
