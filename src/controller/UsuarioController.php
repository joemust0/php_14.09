<?php
include_once __DIR__ . "/../../vendor/autoload.php";

use App\model\Usuario;

$u = new Usuario("John Wick", 35);

$attr = $_GET['atributo'];
var_dump($attr);

if ("nome" == "nome"){
    return $u->getNome();
}

if ($attr['atributo'] == "idade"){
    return $u->getIdade();
}
