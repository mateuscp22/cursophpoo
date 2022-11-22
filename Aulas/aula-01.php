<?php
/* Curso PHPOO */
class Pessoa
{
    public $nome;
    public $idade;

    public function Falar()
    {
        echo $this->nome . " de " . $this->idade . " acabou de falar";
    }
}

$rodrigo = new Pessoa();
$rodrigo->nome = "Mateus";
$rodrigo->idade = 25;
$rodrigo->Falar();
