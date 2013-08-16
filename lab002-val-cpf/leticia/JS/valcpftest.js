test("cpf_nao_informado", function(){
   cpf  = null;
   resp = consulta.validar( cpf );
   equal("cpf não existe", resp, "cpf não informado");
});

test("cpf_nao_contem_11_digitos", function(){
   cpf  = "111.111.111-000";
   resp = consulta.validar( cpf );
   equal("cpf não contém 11 digitos", resp, "cpf incorreto");
});


test("cpf_invalido", function(){
   cpf  = "222.222.222-00";
   resp = consulta.validar( cpf );
   equal("cpf invalido", resp, "cpf invalido");
   
});


test("cpf_valido", function(){
   cpf  = "326.356.238-05";
   resp = consulta.validar( cpf );
   equal("cpf valido", resp, "cpf valido");
   
});