<?php

class Pessoa
{
    /* private $nome; */
    private $dados = array();

    public function __set($nome, $valor)
    {
        $this->dados[$nome] = $valor;
    }

    public function __get($nome)
    {
        return $this->dados[$nome];
    }

    public function __toString()
    {
        return "Tentei imprimir o objeto";
    }

    public function __invoke()
    {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
/* $pessoa->nome = "Mateus";
$pessoa->idade = 23;
$pessoa->sexo = "M"; */
// var_dump($pessoa);

echo $pessoa . "<br>";
echo $pessoa();
