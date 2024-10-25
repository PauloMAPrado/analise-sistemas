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

    class EstrategiaFactory{
        public static function criarEstrategiaValor($tipo){
            switch ($tipo) {
                case 'desconto':
                    return new Desconto();
                    break;

                case 'aumento':
                    return new Aumento();
                    break;
                
                default:
                    throw new Exception("Tipo de Estratégia Desconhecido");
                    break;
            }
        }
    }

    try {
        $estrategia = EstrategiaFactory::criarEstrategiaValor('desconto');
        $valor = 850.00;

        echo "Valor Inicial é R$ " . $valor . "<br>";
        $valor = $estrategia->alterarValor($valor);

        echo "Valor com Desconto é R$ " . $valor;

    } catch (\Throwable $th) {
        echo "Erro: " . $th->getMessage();
    }

?>