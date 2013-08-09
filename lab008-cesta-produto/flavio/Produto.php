<?php

/**
 *
 *
 */
class Produto {

    public $id;
    public $nome;
    public $valor;
    public $produtos;

    function __construct($id = null, $nome = null, $valor = null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->valor = $valor;
    }

    function add($produto) {
        $this->produtos[] = $produto;
    }

    function checkout($origem, $destino) {
        $total = 0;
        
        # soma
        foreach($this->produtos as $produto){
            $total += $produto->valor;
        }
        
        # acréscimo
        if ($this->prazoDestino($origem, $destino) == "Entrega em 15 dias"){
            $total = $total + ($total * 0.05);
        }
        
        return $total;

    }
    
    function prazoDestino($origem, $destino) {
        if ($origem === $destino) {
            return "Entrega em 5 dias";
        } else {
            return "Entrega em 15 dias";
        }
    }    

}

?>