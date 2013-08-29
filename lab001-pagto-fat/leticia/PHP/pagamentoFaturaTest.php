<?php
/**
 * Teste da class pagamentoFatura 
 */
require_once "pagamentoFatura.class.php";


Class PagamentoFaturaTeste extends PHPUnit_Framework_TestCase {
    
    /**
     * Atraso no pagamento de um mês 
     */
    public function testVerificaPagtoAtrasadoUmMes() {
        
        $pagFatura = new PagamentoFatura();
        $pagFatura->dataVencimento = "10/04/2011";
        $pagFatura->dataPagamento  = "10/05/2011";
        $pagFatura->SomarDatas();
        $pagFatura->StatusPagamento();
        
        $this->assertEquals("Pagto feito com atraso de 30 dias", $pagFatura->status);
        
    }

    /**
     * Atraso de pagamento de Cinco dias
     */
    public function testVerificaPagtoAtrasadoCincoDias() {
        
        $pagFatura = new PagamentoFatura();
        $pagFatura->dataVencimento = "25/11/2010";
        $pagFatura->dataPagamento  = "30/11/2010";
        $pagFatura->SomarDatas();
        $pagFatura->StatusPagamento();
        
        $this->assertEquals("Pagto feito com atraso de 5 dias", $pagFatura->status);
        
    }

    /**
     * Atraso de pagamento de um dia
     */
    public function testVerificaPagtoAtrasadoUmDia() {
        
        $pagFatura = new PagamentoFatura();
        $pagFatura->dataVencimento = "27/12/2010";
        $pagFatura->dataPagamento  = "28/12/2010";
        $pagFatura->SomarDatas();
        $pagFatura->StatusPagamento();
        
        $this->assertEquals("Pagto feito com atraso de 1 dia", $pagFatura->status);
        
    }

    /**
     * Pagamento realizado no dia
     */
    public function testPgtoEmDias() {
        
        $pagFatura = new PagamentoFatura();
        $pagFatura->dataVencimento = "01/11/2010";
        $pagFatura->dataPagamento  = "01/11/2010";
        $pagFatura->SomarDatas();
        $pagFatura->StatusPagamento();
        
        $this->assertEquals("Pagto feito em dia", $pagFatura->status);
        
    }

}
?>