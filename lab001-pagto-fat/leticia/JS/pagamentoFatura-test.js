test("verificaPagtoAtrasado", function() {
    
    dt_vencto = "25/11/2010";
    dt_pagto  = "30/11/2010";
    resp      = Fatura.verificaPagto( dt_vencto, dt_pagto );
    equal("Pagto feito com atraso de 5 dias", resp, "pagto deve ter 5 dias de atraso");

    dt_vencto = "10/04/2011";
    dt_pagto  = "10/05/2011";
    resp = Fatura.verificaPagto(dt_vencto, dt_pagto);
    equal("Pagto feito com atraso de 30 dias", resp, "pagto deve ter 30 dias de atraso");

});

test("pgtoEmDias", function() {

    dt_vencto = "01/11/2010";
    dt_pagto  = "01/11/2010";
    resp = Fatura.verificaPagto(dt_vencto, dt_pagto);
    equal("Pagto feito em dia", resp, "pagto deve ter sido feito em dia");

});

test("pgtoEmUmDiaAtrasado", function() {

    dt_vencto = "27/12/2010";
    dt_pagto  = "28/12/2010";
    resp = Fatura.verificaPagto(dt_vencto, dt_pagto);
    equal("Pagto feito com atraso de 1 dia", resp, "pagto realizado com atraso de um dia");

});