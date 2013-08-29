var Fatura = {
    verificaPagto: function (dt_vencto, dt_pagto) {
        // Transforma a data em uma array
        "use strict";
        var arr_dtVencimento,
            arr_dtPagamento,
            soma_pagamento,
            soma_vencimento,
            result;
        arr_dtVencimento = dt_vencto.split('/');
        arr_dtPagamento = dt_pagto.split('/');

        // Soma a data de pagamento
        soma_pagamento = parseInt(arr_dtPagamento[0], null) +
                         parseInt(arr_dtPagamento[1], null) +
                         parseInt(arr_dtPagamento[2], null);

        // Soma a data de vencimento
        soma_vencimento = parseInt(arr_dtVencimento[0], null) +
                          parseInt(arr_dtVencimento[1], null) +
                          parseInt(arr_dtVencimento[2], null);
        // Status da fatura
        if (soma_vencimento < soma_pagamento) {
            // Result da diferença de data
            result = Math.abs(soma_vencimento - soma_pagamento);

            if (result === 5) {
                return "Pagto feito com atraso de 5 dias";
            }
            if (result === 1) {

                if (arr_dtVencimento[1] < arr_dtPagamento[1]) {
                    return "Pagto feito com atraso de 30 dias";
                }
                return "Pagto feito com atraso de 1 dia";
            }
        } else {
            if (soma_vencimento === soma_pagamento) {
                return "Pagto feito em dia";
            }
        }
    }
};