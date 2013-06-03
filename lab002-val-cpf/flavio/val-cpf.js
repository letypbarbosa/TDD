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

        this.extrair_apenas_numeros();
        this.extrair_digitos();

        if (this.doc.length !== 11) {
            return false;
        }

        if (this.validar_sequencia_identica()) {
            return false;
        }

        this.digt1.mult_somar_cpf();
        this.digt1.resto = this.calc_resto(this.digt1.soma);
        if (!cpf.validar_digito(this.digt1.resto, this.digt1.num)) {
            return false;
        }

        this.digt2.mult_somar_cpf();
        this.digt2.resto = this.calc_resto(this.digt2.soma);
        if (!cpf.validar_digito(this.digt2.resto, this.digt2.num)) {
            return false;
        }

        return true;
    },
    extrair_apenas_numeros: function() {
        this.doc = this.doc.replace(/[^\d]+/g, '');
    },
    extrair_digitos: function() {
        var cpf_arr = this.doc.split("");
        this.digt1.num = parseInt(cpf_arr[9]);
        this.digt2.num = parseInt(cpf_arr[10]);
    },
    calc_resto: function(soma) {
        var resto = (soma * 10) % 11;

        if ((resto === 10) || (resto === 11)) {
            resto = 0;
        }

        return resto;
    },
    validar_digito: function(resto, digito) {
        if (resto === digito) {
            return true;
        }
    },
    validar_sequencia_identica: function() {
        switch (this.doc) {
        case "00000000000":
            return false;
        case "11111111111":
            return false;
        case "22222222222":
            return false;
        case "33333333333":
            return false;
        case "44444444444":
            return false;
        case "55555555555":
            return false;
        case "66666666666":
            return false;
        case "77777777777":
            return false;
        case "88888888888":
            return false;
        case "99999999999":
            return false;
        }
        return true;
    }
};