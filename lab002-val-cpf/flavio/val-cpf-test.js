test("obj cpf - atribuindo", function() {
    cpf.doc = "";
    equal(cpf.validar(), false, "cumprimento zero não deve validar");

    cpf.doc = 0;
    equal(cpf.validar(), false, "zero não deve validar");

    cpf.doc = null;
    equal(cpf.validar(), false, "nulo não deve validar");

    cpf.doc = "0000000";
    equal(cpf.validar(), false, "0000000 não deve validar");
});
test("obj cpf - tamanho", function() {

    cpf.doc = "123456789123"; // string length 12
    equal(cpf.validar(), false, "Cumprimento do CPF não deve ser diferente de 11");

    cpf.doc = "1234567891"; // string length 10
    equal(cpf.validar(), false, "Cumprimento do CPF não deve ser diferente de 11");

    cpf.doc = "123.456.789-999"; // string length 14 - 3
    equal(cpf.validar(), false, "Cumprimento do CPF não deve ser diferente de 11");

});
test("obj cpf - extrair_apenas_numeros()", function() {

    cpf.doc = "123.456.789-12";
    cpf.extrair_apenas_numeros();
    equal(cpf.doc, "12345678912", "Deve conter apenas números");

    cpf.doc = "1.-/?;:.,><][}{~^'`'\"2!@#$%*()-_=+-*|";
    cpf.extrair_apenas_numeros();
    equal(cpf.doc, "12", "Deve conter apenas números");

});
test("obj cpf - extrair_digitos()", function() {

    cpf.doc = "123.456.789-09";
    cpf.extrair_apenas_numeros();
    cpf.extrair_digitos();
    equal(cpf.digt1.num, "0", "Extração do dígito 1 falhou");
    equal(cpf.digt2.num, "9", "Extração do dígito 2 falhou");

});
test("obj cpf - mult_somar_cpf()", function() {

    cpf.doc = "123.456.789-09";
    cpf.extrair_apenas_numeros();
    cpf.digt1.mult_somar_cpf();
    equal(cpf.digt1.soma, "210", "Soma do dígito 1 não bate");

    cpf.digt2.mult_somar_cpf();
    equal(cpf.digt2.soma, "255", "Soma do dígito 2 não bate");


});
test("obj cpf - soma_calc_resto()", function() {
    cpf.doc = "123.456.789-09";
    cpf.extrair_apenas_numeros();

    cpf.digt1.mult_somar_cpf();
    cpf.digt1.resto = cpf.calc_resto(cpf.digt1.soma);
    equal(cpf.digt1.resto, "0", "O resto do dígito 1 não está batendo");

    cpf.digt2.mult_somar_cpf();
    cpf.digt2.resto = cpf.calc_resto(cpf.digt2.soma);
    equal(cpf.digt2.resto, "9", "O resto do dígito 2 não está batendo");
});
test("obj cpf - validar_digito()", function() {

    cpf.doc = "123.456.789-09";
    cpf.extrair_apenas_numeros();
    cpf.extrair_digitos();

    cpf.digt1.mult_somar_cpf();
    cpf.digt1.resto = cpf.calc_resto(cpf.digt1.soma);
    ok(cpf.validar_digito(cpf.digt1.resto, cpf.digt1.num), "Dígito 1 inválido");

    cpf.digt2.mult_somar_cpf();
    cpf.digt2.resto = cpf.calc_resto(cpf.digt2.soma);
    ok(cpf.validar_digito(cpf.digt2.resto, cpf.digt2.num), "Dígito 2 inválido");

});
test("obj cpf - validar_sequencia_identica()", function() {

    cpf.doc = "00000000000";
    equal(cpf.validar_sequencia_identica(), false, "sequencia de zero não deve validar");

    cpf.doc = "11111111111";
    equal(cpf.validar_sequencia_identica(), false, "sequencia de 1 não deve validar");

    cpf.doc = "22222222222";
    equal(cpf.validar_sequencia_identica(), false, "sequencia de 2 não deve validar");

    cpf.doc = "33333333333";
    equal(cpf.validar_sequencia_identica(), false, "sequencia de 3 não deve validar");

    cpf.doc = "44444444444";
    equal(cpf.validar_sequencia_identica(), false, "sequencia de 4 não deve validar");

    cpf.doc = "55555555555";
    equal(cpf.validar_sequencia_identica(), false, "sequencia de 5 não deve validar");

    cpf.doc = "66666666666";
    equal(cpf.validar_sequencia_identica(), false, "sequencia de 6 não deve validar");

    cpf.doc = "77777777777";
    equal(cpf.validar_sequencia_identica(), false, "sequencia de 7 não deve validar");

    cpf.doc = "88888888888";
    equal(cpf.validar_sequencia_identica(), false, "sequencia de 8 não deve validar");

    cpf.doc = "99999999999";
    equal(cpf.validar_sequencia_identica(), false, "sequencia de 9 não deve validar");

});