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
    
    
    function checarAtraso() {

        $dt_venc = $this->converte_datas($this->dt_vencimento);
        $dt_pgto = $this->converte_datas($this->dt_pagamento);

        $locale = new DateTimeZone('America/Sao_Paulo');
        
        $start = new DateTime($dt_venc, $locale);
        $end   = new DateTime($dt_pgto, $locale);
        
        $diff = $start->diff($end);
        $this->diasAtraso = $diff->days;

        
        if ($diff->days){            
            $this->calcularMulta($diff->days);
    
            return true;
        }
        
        return false;
        
    }
        
    private function calcularMulta($dias){

        if ($dias == 1) {
            $this->valorMulta = 11;
        }
        if ($dias <= 30) {
            $this->valorMulta = $dias * 0.5 + 11;
        }
        if ($dias > 30) {
            $this->valorMulta = (30 * 0.5 + 11) + $dias * 1.5;
        }
            
    }            
    
    function getDiasAtraso(){
        return $this->diasAtraso;
    }
    
    function getValorMulta(){
        return $this->valorMulta;
    }
    
    private function converte_datas($dt) {
        $dt = explode('/', $dt);
        $dt = $dt[2] . '-' . $dt[1] . '-' . $dt[0];

        return $dt;
    }
}
?>
