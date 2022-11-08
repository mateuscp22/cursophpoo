<?php
/* Ocorrência normal que afecta o funcionamento da aplicação
/* Exception é a classse base para todas Exceptions
/* message, code, file, line
 */

class Newslatter
{
    public function cadastrarEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
            throw new Exception("Este email é inválido", 121);
        else :
            echo "Email cadastrado com sucesso!";
        endif;
    }
}

$newslatter = new Newslatter();

try {
    $newslatter->cadastrarEmail("contato@");
} catch (Exception $e) {
    echo "Mensagem:" . $e->getMessage() . "<br>";
    echo "Mensagem:" . $e->getCode() . "<br>";
    echo "Mensagem:" . $e->getFile() . "<br>";
    echo "Mensagem:" . $e->getLine() . "<br>";
};
