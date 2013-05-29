// Referencias:
//http://www.devmedia.com.br/validar-cpf-com-javascript/23916
//http://www.gerardocumentos.com.br/?pg=funcao-javascript-para-validar-cpf    
var validarCPF = function() {
    var me = this,
            CPF,
            validacaoInvalida = false,
            digitosIguais = 1,
            numeros,
            digitos,
            i,
            soma = 0,
            resultado;


    // Codifica o valor do CPF para ser apenas um valor numérico
    CPF = me.txtCPFtemp.val().replace(/[^\d]+/g, '');

    // Verifica se o tamanho do CPF contém mais que 11 caracteres 
    if (CPF.length != 11) {
        validacaoInvalida = true;
    }

    // Verifica se a sequência de digitos são identicos 
    for (i = 0; i < CPF.length - 2; i++) {
        if (CPF.charAt(i) != CPF.charAt(i + 1)) {
            digitosIguais = 0;
            break;
        }
    }

    // Se digitos forem iguais o CPF é Invalido
    if (digitosIguais) {
        validacaoInvalida = true;
    }


    // Verificação do primeiro digito do cpf - Cal. ver a documentação
    numeros = CPF.substring(0, 9);
    digitos = CPF.substring(9);

    for (i = 10; i > 1; i--) {
        soma += numeros.charAt(10 - i) * i;
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    }

    if (resultado != digitos.charAt(0)) {
        validacaoInvalida = true;
    }

    // Verificação do segundo digito do cpf - Cal. ver a documentação
    numeros = CPF.substring(0, 10);
    soma = 0

    for (i = 11; i > 1; i--) {
        soma += numeros.charAt(11 - i) * i;
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    }

    if (resultado != digitos.charAt(1)) {
        validacaoInvalida = true;
    }
    if (!validacaoInvalida)
        return true;
}