<?php

require 'Produto.php';

class ProdutoTest extends PHPUnit_Framework_Testcase {

    function testCalculaFreteLivroLocalmente() {

        $cestaLivro = new Produto();

        # id, nome do livro, valor
        $cestaLivro->add(new Produto(0, "Guia de exame", 10));
        $origem = "SP";
        $destino = "SP";

        $this->assertEquals(10, $cestaLivro->checkout($origem, $destino));
    }

    function testCalculaFreteLivroLocalDiferente() {
        $cestaLivro = new Produto();

        # id, nome do livro, valor
        $cestaLivro->add(new Produto(0, "Guia de exame", 10));
        $cestaLivro->add(new Produto(0, "Dominando TDD", 10));
        $origem = "SP";
        $destino = "BA"; // 5% de acréscimo

        $acresecimo = 20 * 0.05;
        $total = (10 + 10) + $acresecimo;

        $this->assertEquals($total, $cestaLivro->checkout($origem, $destino));
    }
    
    function testPrazoEntregaLocal(){
        $produto = new Produto();
        $origem = "SP";
        $destino = "SP";
        $prazo = $produto->prazoDestino($origem, $destino);

        $this->assertEquals("Entrega em 5 dias", $prazo);
    }

    function testPrazoEntregaForaEstado(){
        $produto = new Produto();
        $origem = "SP";
        $destino = "BA";
        $prazo = $produto->prazoDestino($origem, $destino);

        $this->assertEquals("Entrega em 15 dias", $prazo);
    }    
    

}

?>
