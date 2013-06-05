test( "statusPagamento", function(){
    
        // Efetuado no dia do vencimento
        dtPagamento  = "25/06/2013";
        dtVencimento = "25/06/2013";

        retorno = pagamentoFatura.statusPagamento( dtPagamento, dtVencimento );
        equal( "efetuadoVencimento" , retorno, "Pagamento efetuado no dia do vencimento");

        // Efetuando com Antecedência
        dtPagamento  = "20/06/2013";
        dtVencimento = "25/06/2013";

        retorno = pagamentoFatura.statusPagamento( dtPagamento, dtVencimento );
        equal( "efetuadoAndecendencia" , retorno, "Pagamento efetuado com 5 dias de antecedência");

        // Efetuado com Atraso
        dtPagamento  = "30/06/2013";
        dtVencimento = "25/06/2013";

        retorno = pagamentoFatura.statusPagamento( dtPagamento, dtVencimento );
        equal( "efetuadoAtraso" , retorno, "Pagamento efetuado com 5 dias de atraso");
    
});
