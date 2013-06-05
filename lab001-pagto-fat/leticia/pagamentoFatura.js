pagamentoFatura = {
    
    statusPagamento: function( dtPagamento, dtVencimento ){
        
        // Transformar a data em uma array
        var arr_dtPagamento  = dtPagamento.split('/');
            arr_dtVencimento = dtVencimento.split('/');
        
            // Soma a data de pagamento
            soma_pagamento  = parseInt( arr_dtPagamento[0] ) +
                              parseInt( arr_dtPagamento[1] ) + 
                              parseInt( arr_dtPagamento[2] );
                          
                          
            // Soma a data de vencimento             
            soma_vencimento = parseInt( arr_dtVencimento[0] ) +
                              parseInt( arr_dtVencimento[1] ) + 
                              parseInt( arr_dtVencimento[2] );     
                         
                         
            // Retornar o status do pagamento 
            if ( soma_vencimento == soma_pagamento ){ 
                
                return "efetuadoVencimento"; 
                
            } else if ( soma_vencimento > soma_pagamento ){ 
                
                return "efetuadoAndecendencia"; 
                
            } else if ( soma_vencimento < soma_pagamento ) {
                
               return "efetuadoAtraso";  
            }
    }
    
}