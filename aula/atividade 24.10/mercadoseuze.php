<?php

    class Produto{
        private static $codProduto;
        private $nome;
        private $valor;
    }

    class Compra{
        private static $codCompra;
        private $notaFiscalCompra;
        private $codProCompra;
        private $qtdCompra;
        private $codForCompra;
        private $dataCompra;
    }

    class Venda{
        private static $codVenda;
        private $codClienteVenda;
        private $dataVenda;
        private $codProVenda;
        private $qtdVenda;
        private $precoVenda;
        private $subTotalVenda;
        private $formaPagamento;
    }

    class Pessoa{
        private static $codigo;
        private $nome;
        private $dataNascimento;
        private $identidade;
    }

    class Fornecedor{
        private static $codFornecedor;
        private $razao;
        private $nomeFantasia;
        private $inscEstadual;
        private $cnpj;
    }

    class Contatos{
        private $tel01;
        private $tel02;
        private $cel01;
        private $cel02;
        private $email;
    }

    class Endereco{
        private $cep;
        private $estado;
        private $cidade;
        private $rua;
        private $numero;
        private $complemento;
    }

    class Cliente{
        private $dataCadastro;
        private $valorAberto;

        function TirarExtrato(){

        }
        function EfetuarPagamento(){

        }
    }

    class Funcionario{
        private $dataAdmissao;
        private $dataRecisao;

        function CadastraCliente(){

        }
        function ConsultaCliente(){

        }
        function AlteraCliente(){

        }
        function CadastrarFornecedor(){

        }
        function ConsultarFornecedor(){

        }
        function AlterarFornecedor(){

        }
    }

?>