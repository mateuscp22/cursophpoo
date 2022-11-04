<?php
/* Classe Generica */

/* public
Este é o nível de acesso mais permissivo. Ele indica que o método ou atributo da classe é público, ou seja, pode ser acessado em qualquer outro ponto do código e por outras classes.

private
Este modificador é o mais restrito. Com ele definimos que somente a própria classe em que um atributo ou método foi declarado pode acessá-lo. Ou seja, nenhuma outra parte do código, nem mesmo as classes filhas, pode acessar esse atributo ou método.

protected
Esse modificador indica que somente a própria classe e as classes que herdam dela podem acessar o atributo ou método. Dessa forma, ao instanciar a classe os elementos protegidos (protected) não podem ser acessados diretamente, como ocorre com o public. */

class Veiculo
{
    private $modelo;
    public $cor;
    public $ano;

    public function Andar()
    {
        echo "Andou";
    }

    public function Parar()
    {
        echo "Parou";
    }
}
class Carro extends Veiculo
{
    public function ligarLimpador()
    {
        echo "Limpando em 321";
    }

    public function setModelo($m)
    {
        $this->modelo = $m;
    }

    public function getModelo()
    {
        return $this->modelo;
    }
}

class Moto extends Veiculo
{
    public function darGrau()
    {
        echo "Dando grau em 321";
    }
}

$carro = new Carro();
$carro->setModelo("HILUX");
echo $carro->getModelo();
var_dump($carro);
