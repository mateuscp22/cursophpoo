<?php
/*
Na composição, uma classe cria a instância de outra classe dentro de si própria, sendo assim, quando ela for destruída, a outra classe também será. Também é uma relação Todo/Parte, ou seja, a classe principal é o todo, e as outras classes nela instanciadas, suas partes.
*/

class Pessoa
{
    public function atributoNome($nome)
    {
        return "O nome da pessoa é: " . $nome;
    }
}

class Exibe
{
    public $pessoa;
    public $nome;

    function __construct($nome)
    {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }
    public function exibeNome()
    {
        echo $this->pessoa->atributoNome($this->nome);
    }
}

$exibe = new Exibe("Mateus");
$exibe->exibeNome();
