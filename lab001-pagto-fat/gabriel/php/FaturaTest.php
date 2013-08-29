<?php

/**
 * 
 */
require_once "Fatura.php";

class FaturaTest extends PHPUnit_Framework_TestCase{
   
    
    public function testPgtoEmAtraso(){
        
        $dt_vencto = "08/09/2013";
        $dt_pagto = "10/09/2013";
        
        $fatura = new Fatura();
        $diasDeAtraso = $fatura->verificaPagto($dt_vencto, $dt_pagto);
        
        $this->AssertEquals(2, $diasDeAtraso);
    }
    
    public function testPgtoEmDia(){
        
        $dt_vencto = "08/09/2013";
        $dt_pagto = "05/09/2013";
        
        $fatura = new Fatura();
        $diasDeAtraso = $fatura->verificaPagto($dt_vencto, $dt_pagto);
        
        $this->AssertEquals(0, $diasDeAtraso);
    }


}



?>