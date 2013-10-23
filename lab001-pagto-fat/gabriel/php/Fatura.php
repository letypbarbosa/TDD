<?php

class Fatura {

    private $dt_vencimento;
    private $dt_pagamento;
    
    private $valorMulta = 0;
    private $diasAtraso = 0;
    
    
    function __construct($dt_venc, $dt_pgto){
        
        $this->dt_vencimento = $dt_venc;
        $this->dt_pagamento  = $dt_pgto;                
    }
    
    
    /**
     * 
     * @return boolean
     */
    function estaEmAtraso() {

        $dt_venc = explode("/", $this->dt_vencimento);
        $dt_pgto = explode("/", $this->dt_pagamento);
        
        date_default_timezone_set('America/Sao_Paulo');
        $date_venc = mktime(0, 0, 0, $dt_venc[1], $dt_venc[0], $dt_venc[2]);
        $date_pgto = mktime(0, 0, 0, $dt_pgto[1], $dt_pgto[0], $dt_pgto[2]);

        $total_venc = ((($date_venc/60)/60)/24); //em dias
        $total_pgto = ((($date_pgto/60)/60)/24); //em dias

        if ($total_pgto > $total_venc){
            $this->diasAtraso = $total_pgto - $total_venc;
            return true;
        }
        return false;
        
    }
        
    /**
     * 
     */
    public function calcularMulta(){

        if (!$this->diasAtraso) {
            return false;
        }
        elseif ($this->diasAtraso == 1) {
            $this->valorMulta = 11;
        }
        elseif ($this->diasAtraso <= 30) {
            $this->valorMulta = $this->diasAtraso * 0.5 + 11;
        }
        elseif ($this->diasAtraso > 30) {
            $this->valorMulta = (30 * 0.5 + 11) + $this->diasAtraso * 1.5;
        }
        return true;
    }            
    
    function getDiasAtraso(){
        return $this->diasAtraso;
    }
    
    function getValorMulta(){
        return $this->valorMulta;
    }
}

$fatura = new Fatura("08/09/2013", "10/09/2013");
$fatura->estaEmAtraso();
$fatura->calcularMulta();
?>
