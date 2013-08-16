<?php
class ObjVetor{
    public $vetor;
    public $chave;
    
    
    public function montarVetor(){
        
        for($i=1; $i<151; $i++){
            $this->vetor[$i] = rand(1,50);
        }
        
        return $this->vetor;
    }
    
    
    public function verificarContadores(){
        
        foreach ($this->vetor as $key => $value) {
            if ($value == 30){
                $this->chave[] = $key;
            }
        }
        
        return $this->chave;
    }
    
}
?>