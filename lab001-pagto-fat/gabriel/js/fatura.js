

var fatura = {
    
    dt_vencimento: "",
    dt_pagamento: "",
    
    valorMulta: 0,
    diasAtraso: 0,
    
    init: function (dt_pgto, dt_venc){
        
        this.dt_vencimento = dt_venc;
        this.dt_pagamento  = dt_pgto;        
        
        this.estaEmAtraso();
    },
            
    estaEmAtraso: function (){
        
        var dt_venc = this.dt_vencimento.split("/");
        var dt_pgto = this.dt_pagamento.split("/");
        
        
        /**
         * 
         */
        var date_venc = new Date();
        
        date_venc.setHours(0);
        date_venc.setMinutes(0);
        date_venc.setSeconds(0);
        
        date_venc.setDate(dt_venc[0]);
        date_venc.setMonth(dt_venc[1]-1); //índice de mês inicia 0
        date_venc.setYear(dt_venc[2]);

        /**
         * 
         */
        var date_pgto = new Date();

        date_pgto.setHours(0);
        date_pgto.setMinutes(0);
        date_pgto.setSeconds(0);
        
        date_pgto.setDate(dt_pgto[0]);
        date_pgto.setMonth(dt_pgto[1]-1); //índice de mês inicia 0
        date_pgto.setYear(dt_pgto[2]);

        var total_venc = (((date_venc.getTime()/1000)/60)/60)/24; //em dias
        var total_pgto = (((date_pgto.getTime()/1000)/60)/60)/24; //em dias

        if (total_pgto > total_venc) {
            this.diasAtraso = total_pgto - total_venc;
            return true;
        }  
        this.diasAtraso = 0;
        return false;
    },
            
    calcularMulta: function (){

        if (!this.diasAtraso) {
            return false;
        }
        else if (this.diasAtraso === 1) {
            this.valorMulta = 11;
        }
        else if (this.diasAtraso <= 30) {
            this.valorMulta = this.diasAtraso * 0.5 + 11;
        }
        else if (this.diasAtraso > 30) {
            this.valorMulta = (30 * 0.5 + 11) + this.diasAtraso * 1.5;
        }
        return true;
    },
            
    getDiasAtraso: function (){
        return this.diasAtraso;
    },
    
    getValorMulta: function (){
        return this.valorMulta;
    }
};