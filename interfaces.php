<?php

interface Crud
{
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class noticias implements Crud
{
    public function create($data)
    {
        //Lógica para criar uma notícia
    }

    public function read()
    {
        //Lógica para ler uma notícia
    }
    public function update()
    {
        //Lógica para atualizar uma notícia
    }

    public function delete()
    {
        //Lógica para deletar uma notícia
    }
}
