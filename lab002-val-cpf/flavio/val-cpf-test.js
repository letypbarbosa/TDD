test("obj cpf - atribuindo", function() {
    cpf.doc = "";
    equal(false, cpf.validar(), "cumprimento zero não deve validar");

    cpf.doc = 0;
    equal(false, cpf.validar(), "zero não deve validar");

    cpf.doc = null;
    equal(false, cpf.validar(), "nulo não deve validar");

    cpf.doc = "0000000";
    equal(false, cpf.validar(), "0000000 não deve validar");
});
test("obj cpf - tamanho", function() {

    cpf.doc = "123456789123"; // string length 12
    equal(false, cpf.validar(), "Cumprimento do CPF não deve ser diferente de 11");

    cpf.doc = "1234567891"; // string length 10
    equal(false, cpf.validar(), "Cumprimento do CPF não deve ser diferente de 11");

    cpf.doc = "123.456.789-999"; // string length 14 - 3
    equal(false, cpf.validar(), "Cumprimento do CPF não deve ser diferente de 11");

});
test("obj cpf - extrair_apenas_numeros()", function() {

    cpf.doc = "123.456.789-12";
    cpf.extrair_apenas_numeros();
    equal("12345678912", cpf.doc, "Deve conter apenas números");

    cpf.doc = "1.-/?;:.,><][}{~^'`'\"2!@#$%*()-_=+-*|";
    cpf.extrair_apenas_numeros();
    equal("12", cpf.doc, "Deve conter apenas números");

});
test("obj cpf - extrair_digitos()", function() {

    cpf.doc = "123.456.789-09";
    cpf.extrair_apenas_numeros();
    cpf.extrair_digitos();
    equal("0", cpf.digt1.num, "Extração do dígito 1 falhou");
    equal("9", cpf.digt2.num, "Extração do dígito 2 falhou");

});
test("obj cpf - mult_somar_cpf()", function() {

    cpf.doc = "123.456.789-09";
    cpf.extrair_apenas_numeros();
    cpf.digt1.mult_somar_cpf();
    equal("210", cpf.digt1.soma, "Soma do dígito 1 não bate");

    cpf.digt2.mult_somar_cpf();
    equal("255", cpf.digt2.soma, "Soma do dígito 2 não bate");


});
test("obj cpf - soma_calc_resto()", function() {
    cpf.doc = "123.456.789-09";
    cpf.extrair_apenas_numeros();

    cpf.digt1.mult_somar_cpf();
    cpf.digt1.resto = cpf.calc_resto(cpf.digt1.soma);
    equal("0", cpf.digt1.resto, "O resto do dígito 1 não está batendo");

    cpf.digt2.mult_somar_cpf();
    cpf.digt2.resto = cpf.calc_resto(cpf.digt2.soma);
    equal("9", cpf.digt2.resto, "O resto do dígito 2 não está batendo");
});
test("obj cpf - validar_digito()", function() {

    cpf.doc = "123.456.789-09";
    cpf.extrair_apenas_numeros();
    cpf.extrair_digitos();

    cpf.digt1.mult_somar_cpf();
    cpf.digt1.resto = cpf.calc_resto(cpf.digt1.soma);
    ok(cpf.validar_digito(cpf.digt1.resto, cpf.digt1.num), "Dígito 1 inválido, lógo, cpf inválido");

    cpf.digt2.mult_somar_cpf();
    cpf.digt2.resto = cpf.calc_resto(cpf.digt2.soma);
    ok(cpf.validar_digito(), "Dígito 2 inválido, lógo, cpf inválido");

});