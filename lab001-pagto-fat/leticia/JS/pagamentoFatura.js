Fatura = {
    
    verificaPagto: function( dt_vencto, dt_pagto ){
        
        // Transformar a data em uma array
        var arr_dtPagamento  = dt_pagto.split('/');
            arr_dtVencimento = dt_vencto.split('/');
            
            
           // Soma a data de pagamento
            soma_pagamento =  parseInt( arr_dtPagamento[0] ) +
                              parseInt( arr_dtPagamento[1] ) +
                              parseInt( arr_dtPagamento[2] );
                          
            // Soma a data de vencimento
            soma_vencimento = parseInt( arr_dtVencimento[0] ) +
                              parseInt( arr_dtVencimento[1] ) +
                              parseInt( arr_dtVencimento[2] );
                      
            // Resultado da diferença de datas
            
            
            if ( soma_pagamento > soma_vencimento ){
                result =  Math.abs( soma_vencimento - soma_pagamento  );
                if ( result === 5 ){
                    return "Pagto feito com atraso de 5 dias";
                } else if ( result === 1 ){
                    if ( arr_dtPagamento[1] > arr_dtVencimento[1] ){
                        return "Pagto feito com atraso de 30 dias";    
                    } else {
                      return "Pagto feito com atraso de 1 dia";   
                    }
                }
            }
            
            if ( soma_pagamento === soma_vencimento ){
                return "Pagto feito em dia";    
            }
    }
}