<?php

/**
 * 
 */
require_once "Fatura.php";

class FaturaTest extends PHPUnit_Framework_TestCase{
   
    
    public function testPgtoEmAtraso(){
        
        $dt_vencto = "08/09/2013";
        $dt_pagto = "10/09/2013";
        
        $fatura = new Fatura($dt_vencto, $dt_pagto);
        
        $this->AssertTRUE(true, $fatura->estaEmAtraso());
        $this->AssertTRUE(true, $fatura->calcularMulta());
        $this->AssertEquals(12, $fatura->getValorMulta());
        $this->AssertEquals(2, $fatura->getDiasAtraso());
    }
    
    public function testPgtoEmDia(){
        
        $dt_vencto = "08/09/2013";
        $dt_pagto = "05/09/2013";
        
        $fatura = new Fatura($dt_vencto, $dt_pagto);
        
        $this->AssertFALSE(false, $fatura->estaEmAtraso());
        $this->AssertFALSE(false, $fatura->calcularMulta());
        $this->AssertEquals(0, $fatura->getValorMulta());
        $this->AssertEquals(0, $fatura->getDiasAtraso());
    }


}



?>