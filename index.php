<?php
require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setId(4);
$produto->setNome("Mesa");
$produto->setDescricao('Madeira');

$produtoDao = new \App\Model\ProdutoDao();
/* $produtoDao->create($produto); */
/* $produtoDao->update($produto); */
$produtoDao->read();
$produtoDao->delete(2);

foreach ($produtoDao->read() as $produto) :
    echo $produto['nome'] . "<br>" . $produto['descricao'] . "<br>";
endforeach;