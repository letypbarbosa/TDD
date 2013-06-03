fatura = {
    verificaPagto: function(dt_vencto, dt_pagto) {

        var arr_temp = [],
                dt = {},
                diferenca;

        dt.vencto = {};
        arr_temp = dt_vencto.split('/');
        dt.vencto.dia = arr_temp[0];
        dt.vencto.mes = arr_temp[1];
        dt.vencto.ano = arr_temp[2];
        dt.vencto = new Date(dt.vencto.ano, dt.vencto.mes - 1, dt.vencto.dia)

        dt.pagto = {};
        arr_temp = dt_pagto.split('/');
        dt.pagto.dia = arr_temp[0];
        dt.pagto.mes = arr_temp[1];
        dt.pagto.ano = arr_temp[2];
        dt.pagto = new Date(dt.pagto.ano, dt.pagto.mes - 1, dt.pagto.dia)

        diferenca = this.arredonda_diferenca(dt.pagto - dt.vencto);

        if (diferenca === 0) {
            return "Pagto feito em dia";
        } else if (diferenca === 1) {
            return "Pagto feito com atraso de 1 dia";
        } else if (diferenca === 5) {
            return "Pagto feito com atraso de 5 dias";
        } else if (diferenca === 30) {
            return "Pagto feito com atraso de 30 dias";
        }


    },
    arredonda_diferenca: function(diff) {
        var one_day = 1000 * 60 * 60 * 24;
        return Math.ceil(diff / one_day);
    }

};


/**
 * Solução baseado no código abaixo:
 * Veja mais em http://www.javascriptkit.com/javatutors/datedifference.shtml
 * 
 * 
 
 //Set the two dates 
 today = new Date()
 var christmas = new Date(today.getFullYear(), 11, 25)  //Month is 0-11 in JavaScript
 
 if (today.getMonth() == 11 && today.getDate() > 25)    //if Christmas has passed already
 christmas.setFullYear(christmas.getFullYear() + 1) //calculate next year's Christmas
 
 //Set 1 day in milliseconds
 var one_day = 1000 * 60 * 60 * 24
 
 //Calculate difference btw the two dates, and convert to days
 document.write(Math.ceil((christmas.getTime() - today.getTime()) / (one_day)) + " days left until Christmas!");
 */