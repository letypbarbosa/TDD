var cpf = {
    doc: "",
    digt1: {
        num: "",
        resto: "",
        soma: "",
        mult_somar_cpf: function() {

            var cpf_arr = cpf.doc.split("");

            this.soma = 0;
            this.soma += cpf_arr[0] * 10;
            this.soma += cpf_arr[1] * 9;
            this.soma += cpf_arr[2] * 8;
            this.soma += cpf_arr[3] * 7;
            this.soma += cpf_arr[4] * 6;
            this.soma += cpf_arr[5] * 5;
            this.soma += cpf_arr[6] * 4;
            this.soma += cpf_arr[7] * 3;
            this.soma += cpf_arr[8] * 2;
        }
    },
    digt2: {
        num: "",
        resto: "",
        soma: "",
        mult_somar_cpf: function() {

            var cpf_arr = cpf.doc.split("");

            this.soma = 0;
            this.soma += cpf_arr[0] * 11;
            this.soma += cpf_arr[1] * 10;
            this.soma += cpf_arr[2] * 9;
            this.soma += cpf_arr[3] * 8;
            this.soma += cpf_arr[4] * 7;
            this.soma += cpf_arr[5] * 6;
            this.soma += cpf_arr[6] * 5;
            this.soma += cpf_arr[7] * 4;
            this.soma += cpf_arr[8] * 3;
            this.soma += cpf_arr[9] * 2;
        }
    },
    validar: function() {
        "use strict";

        if (!this.doc) {
            return false;
        }

        if (this.doc === "0000000") {
            return false;
        }

        this.extrair_apenas_numeros();
        this.extrair_digitos();

        if (this.doc.length != 11) {
            return false;
        }

        this.digt1.mult_somar_cpf();
        this.digt1.resto = this.calc_resto(this.digt1.soma);
        if (!cpf.validar_digito(this.digt1.resto, this.digt1.num)){
            return false;
        }

        this.digt2.mult_somar_cpf();
        this.digt2.resto = this.calc_resto(this.digt2.soma);
        if (!cpf.validar_digito(this.digt2.resto, this.digt2.num)){
            return false;
        }

        return true;
    },
    extrair_apenas_numeros: function() {
        this.doc = this.doc.replace(/[^\d]+/g, '');
    },
    extrair_digitos: function() {
        var cpf_arr = this.doc.split("");
        this.digt1.num = cpf_arr[9];
        this.digt2.num = cpf_arr[10];
    },
    calc_resto: function(soma) {
        var resto = (soma * 10) % 11;

        if ((resto == 10) || (resto == 11))
            resto = 0;

        return resto;
    },
    validar_digito: function (resto, digito) {
        if (resto == digito)
            return true;
    }

};





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