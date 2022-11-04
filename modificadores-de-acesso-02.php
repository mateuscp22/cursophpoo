<?php

class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;

    private function Andar()
    {
        echo "Andou";
    }
    public function Parar()
    {
        echo "Parou";
    }

    /*     public function mostrarAcao()
    {
        $this->Andar();
    } */
}

class Carro extends Veiculo
{
    public function ligarLimpador()
    {
        echo "Limpando em 321";
    }

    public function mostrarAcao()
    {
        $this->Andar();
    }
}

$carro = new Carro();
$carro->mostrarAcao();
