<?php
/* Acontece quando um objeto precisa de outro objeto para completar a sua ação (Todo/Parte), ou seja, faz a agregação de um objeto externo e o utiliza como parte de si própria.  */

class Produtos
{
    public $nome;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho
{
    public $produtos;
    public function adiciona(Produtos $produto)
    {
        $this->produtos[] = $produto;
    }
    public function exibe()
    {
        foreach ($this->produtos as $produto) {
            echo $produto->nome . "<br>";
            echo $produto->valor . "<br>";
        }
    }
}

$produto1 = new Produtos("notebook", "R$1500,00");
$produto2 = new Produtos("mouse", "R$50,00");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();
