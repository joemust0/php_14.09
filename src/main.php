<?php

include_once __DIR__ . "/../vendor/autoload.php";

    use App\model\Usuario;

    $u = new Usuario("John Wick");

    echo '<h2>Task Today</h2>';
    echo $u->getNome();
    echo $u->getIdade();
