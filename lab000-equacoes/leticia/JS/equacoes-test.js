test("ResolvendoEquacoesA", function(){
    A =  1;
    B = -4;
    C =  3;
    
    delta = equacoes.valorDelta(A,B,C);
    equal(4, delta, "Verificando o valor de Delta"); 
    
    raiz = equacoes.valorRaiz();
    equal(2, raiz, "Verificando o valor da raiz"); 
    
    valor1 = equacoes.Valor1();
    equal(1, valor1, "Verificando o primeiro Valor"); 
    
    valor2 = equacoes.Valor2();
    equal(3, valor2, "Verificando o segundo Valor"); 
});


test("ResolvendoEquacoesB", function(){
    A =  2;
    B = -4;
    C =  2;
    
    delta = equacoes.valorDelta(A,B,C);
    equal(0, delta, "Verificando o valor de Delta"); 
    
    raiz = equacoes.valorRaiz();
    equal(0, raiz, "Verificando o valor da raiz"); 
    
    valor1 = equacoes.Valor1();
    equal(1, valor1, "Verificando o primeiro Valor"); 
    
    valor2 = equacoes.Valor2();
    equal(1, valor2, "Verificando o segundo Valor"); 
});


test("ResolvendoEquacoesC", function(){
    A = -1;
    B =  1;
    C =  2;
    
    delta = equacoes.valorDelta(A,B,C);
    equal(9, delta, "Verificando o valor de Delta"); 
    
    raiz = equacoes.valorRaiz();
    equal(3, raiz, "Verificando o valor da raiz"); 
    
    valor1 = equacoes.Valor1();
    equal(2, valor1, "Verificando o primeiro Valor"); 
    
    valor2 = equacoes.Valor2();
    equal(-1, valor2, "Verificando o segundo Valor"); 
});

test("ResolvendoEquacoesD", function(){
    A =  1;
    B = -2;
    C =  0;
    
    delta = equacoes.valorDelta(A,B,C);
    equal(4, delta, "Verificando o valor de Delta"); 
    
    raiz = equacoes.valorRaiz();
    equal(2, raiz, "Verificando o valor da raiz"); 
    
    valor1 = equacoes.Valor1();
    equal(0, valor1, "Verificando o primeiro Valor"); 
    
    valor2 = equacoes.Valor2();
    equal(2, valor2, "Verificando o segundo Valor"); 
});


test("ResolvendoEquacoesE", function(){
    A = 3;
    B = 0;
    C = -27;
    
    delta = equacoes.valorDelta(A,B,C);
    equal(324, delta, "Verificando o valor de Delta"); 
    
    raiz = equacoes.valorRaiz();
    equal(18, raiz, "Verificando o valor da raiz"); 
    
    valor1 = equacoes.Valor1();
    equal(-3, valor1, "Verificando o primeiro Valor"); 
    
    valor2 = equacoes.Valor2();
    equal(3, valor2, "Verificando o segundo Valor"); 
});



test("ResolvendoEquacoesF", function(){
    A =  2;
    B = -5;
    C =  4;
    
    delta = equacoes.valorDelta(A,B,C);
    equal(-7, delta, "Verificando o valor de Delta"); 
    
    raiz = equacoes.valorRaiz();
    equal(0, raiz, "Verificando o valor da raiz"); 
    
    valor1 = equacoes.Valor1();
    equal(1.25, valor1, "Verificando o primeiro Valor"); 
    
    valor2 = equacoes.Valor2();
    equal(1.25, valor2, "Verificando o segundo Valor"); 
});