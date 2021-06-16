<?php
    require("./vendor/autoload.php");

    use App\Models\Produto;

    $produtoModel = new \App\Model\Produto();

    $lista = $produtoModel->listarTodos();

    foreach($lista as $produto){
        echo $produto->descricao;
    }