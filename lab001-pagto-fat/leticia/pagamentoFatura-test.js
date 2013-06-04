test("statusData", function() {
    
    dtPagamento  = "10/06/2013";
    dtVencimento = "20/06/2013";
    
    result = situacaoPagamento.CalcularData( dtPagamento, dtVencimento );
    
    equal( result, dataPagamento, "Pagamento em dia" );
    
});