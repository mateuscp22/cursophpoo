<?php

/* Definimos Polimorfismo como um princípio a partir do qual as classes derivadas de uma única classe base são capazes de invocar os métodos que, embora apresentem a mesma assinatura, comportam-se de maneira diferente para cada uma das classes derivadas. */

class Animal
{
    public function Andar()
    {
        echo "O animal andou";
    }

    public function Correr()
    {
        echo "O animal correu";
    }
}

class Cavalo extends Animal
{
    public function Andar()
    {
        $this->Correr();
    }
}

$animal = new Cavalo();
$animal->Andar();
