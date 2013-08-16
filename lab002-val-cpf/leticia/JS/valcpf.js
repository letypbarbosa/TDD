var consulta = {
    validar: function (cpf) {
        "use strict";
        var me = this,
            val_cpf;
        // CPF não informado
        if (!cpf) {
            return "cpf não existe";
        }
        // Transforma o cpf em números
        val_cpf = cpf.replace(/[^\d]+/g,'');
        // O cpf não contém 11 digitos
        if (val_cpf.length !== 11) {
            return "cpf não contém 11 digitos";
        }
        //Realizar a consulta dos dois últimos digitos
        return me.comparar(val_cpf);
    },

    comparar: function (cpf_informado) {
        "use strict";
        var me = this,
            penultimoDigito,
            ultimoDigito;
        // Verificar o primeiro Digito
        penultimoDigito = me.primeiroDigito(cpf_informado);
        // Verificar o segundo Digito
        ultimoDigito  = me.segundoDigito(cpf_informado);
        // Confirmando os digitos são validos
        if (penultimoDigito == cpf_informado.charAt(9) && ultimoDigito == cpf_informado.charAt(10)) {
            return "cpf valido";
        } 
        return "cpf invalido";
    },

    primeiroDigito: function (digito) {
        "use strict";
        var me = this,
            total = 0,
            i = 0;
        // Obtendo a soma dos resultados da multiplicação
        for (i; i < 9; i++) {
            total += parseInt(digito.charAt(i) * (10 - i));
        }
        return me.ValorDigito(total);
    },

    segundoDigito: function (digito) {
        "use strict";
        var me = this,
            total = 0,
            i = 0;

        // Obtendo a soma dos resultados da multiplicação
        for (i; i <10; i++) {
            total += parseInt(digito.charAt(i) * (11 - i));
        }
        return me.ValorDigito(total);
    },

    ValorDigito: function (total) {
        "use strict";
        var result,
            digito;

        result = total % 11;

        if (result < 2) {
            digito = 0;
        } else {
            digito = 11 - result;
        }
        return digito;
    }
};