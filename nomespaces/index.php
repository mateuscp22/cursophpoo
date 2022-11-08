<?php
require 'classes/produto.php';
require 'models/produto.php';

use models\produto as productModel;
use classes\produto as productClass;
/* $produto = new \classes\Produto(); */

$produto = new productModel();
$produto->mostrarDetalhes();
echo "   |   ";

$produto2 = new productClass();
$produto2->mostrarDetalhes();
