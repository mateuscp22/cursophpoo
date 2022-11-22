<?php
/* É uma das relações mais comuns entre dois objetos, acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro. Em outras palavras, é como se eu tivesse duas classes distintas, e fizesse uso de uma delas dentro da outra, ou como parâmetro de outra. */

class Pedido
{
    public $numero;
    public $cliente;
}

class Cliente
{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Mateus";
$cliente->endereco = "Rua xxx, Nº 123";

$pedido = new Pedido();
$pedido->numero = "567";
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'numero_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);
