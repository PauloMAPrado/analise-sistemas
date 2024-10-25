<?php

    class ProdutoSingleton{
        private static $instanciaUnica = null;
        private $preco = "R$ 10.00";

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function getPreco(){
            return $this->preco;
        }

        public static function getInstancia(){
            if (self::$instanciaUnica == null){
                return self::$instanciaUnica = new ProdutoSingleton();
            }else{
                return self::$instanciaUnica;
            }
        }
    }

    try{

        $produto1 = ProdutoSingleton::getInstancia();
        $produto2 = ProdutoSingleton::getInstancia();

        $produto1->setPreco("R$30.00");
        $produto2->setPreco("R$10.00");
   
        echo ("Produto 01: " . $produto1->getPreco());
        echo ("<br>");
        echo ("Produto 02: " . $produto2->getPreco());

        
    } catch(Exception $e){
        echo ("Erro: " . $e);
    }

?>