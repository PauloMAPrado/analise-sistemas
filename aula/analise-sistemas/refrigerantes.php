<?php
    class Produto{
        private $nome;
        private $preco;

        public function __construct($nome, $preco){
            $this->nome = $nome;
            $this->preco = $preco;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function imprimir(){
            echo("Produto: " . $this->nome . "<br>" . "Preço: R$" . $this->preco);
        }
    }

    echo("<b>Valor Original (Produto 01)</b> <br>");
    $produto = new Produto("Coca Cola", "9.99");

    $produto->imprimir();

    $produto->setPreco("10.00");

    echo ("<br><br><br>");

    echo("<b>Valor Alterado (Produto 01)</b><br>");
    $produto->imprimir();

    $produto = new Produto("Guaraná","7.50");

    echo("<br><br><br>");

    echo("<b>Valor Original (Produto 02)</b> <br>");
    $produto->imprimir();

    $produto->setPreco("7.75");

    echo ("<br><br><br>");

    echo("<b>Valor Alterado (Produto 02)</b><br>");
    $produto->imprimir();
    
?>