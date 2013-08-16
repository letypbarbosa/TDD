var equacoes = {
    delta: "",
    raiz: "",
    valorA: "",
    valorB: "",
    valorC: "",
    valor1: "",
    valor2: "",
    valorDelta: function (A, B, C) {
        "use strict";
        var me = this;

        me.valorA = A;
        me.valorB = B;
        me.valorC = C;
        me.delta = (me.valorB * me.valorB) - (4 * me.valorA * me.valorC);
        return me.delta;
    },
    valorRaiz: function () {
        "use strict";
        var me = this,
            raiz;
        raiz = Math.sqrt(me.delta);
        if (isNaN(raiz)) {
            me.raiz = 0;
        } else {
            me.raiz = raiz;
        }
        return me.raiz;
    },
    Valor1: function () {
        "use strict";
        var me = this;
        me.valor1 = -(me.valorB + me.raiz) / (2 * me.valorA);
        return me.valor1;
    },
    Valor2: function () {
        "use strict";
        var me = this;
        me.valor2 = -(me.valorB - me.raiz) / (2 * me.valorA);
        return me.valor2;
    }
};