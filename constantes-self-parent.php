<?php
class Pessoa
{
    const nome = "Mateus";

    public function exibirNome()
    {
        echo self::nome;
        /* self aponta para a classe em si */
    }
}

class Mateus extends Pessoa
{
    const nome = "CP";

    public function exibirNome()
    {
        /* echo self::nome; */
        echo parent::nome;
        /* Faz referência a classe pai que foi herdada pela classe atual */
    }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();
echo "<hr>";
$mateus = new Mateus();
$mateus->exibirNome();
