
test("estaEmAtraso", function() {
    
    var dt_pgto = "10/09/2013";
    var dt_venc = "08/09/2013";
    
    fatura.init(dt_pgto, dt_venc);
    
    ok(true, fatura.estaEmAtraso(), true)
    ok(true, fatura.calcularMulta(), true)
    
    equal(fatura.getDiasAtraso(), 2);
    equal(fatura.getValorMulta(), 12);
});

test("estaEmDia", function() {
    
    var dt_pgto = "05/09/2013";
    var dt_venc = "08/09/2013";
    
    fatura.init(dt_pgto, dt_venc);
    
    ok(true, fatura.estaEmAtraso(), false);
    ok(true, fatura.calcularMulta(), false);
    
    equal(fatura.getDiasAtraso(), 0);
    equal(fatura.getValorMulta(), 0);
});
