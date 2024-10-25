<?php

    interface EstrategiaValor{
        public function alterarValor($valor);
    }

    class Desconto implements EstrategiaValor{
        public function alterarValor($valor)
        {
            return $valor * 0.9; //Desconto de 10%
        }
    }

    class Aumento implements EstrategiaValor{
        public function alterarValor($valor)
        {
            return $valor * 1.1; //Acrécimo de 10%
        }
    }

    class Produto{
        private $valor;
        private $estrategia;

        public function __construct($valor, EstrategiaValor $estrategia)
        {
            $this->valor = $valor;
            $this->estrategia = $estrategia;
        }

        public function setValor($valor){
            $this->valor = $valor;
        }

        public function getValor(){
            return $this->valor;
        }

        public function aplicarEstrategia(){
            $this->valor = $this->estrategia->alterarValor($this->valor);
        }
    }

$produto = new Produto(500.00, new Aumento());

echo "Valor Inicial é de R$ " . $produto->getValor() . "<br>";

$produto->aplicarEstrategia();

echo "Valor com Reajuste é de R$ " . $produto->getValor() . "<br>";

?>