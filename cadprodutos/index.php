<?php
require_once 'controller/exibir.php';

$controller = new ProdutoController();
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $preco = $_POST['preco'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $erro = $controller->adicionarProduto($nome, $preco, $descricao);
}

$produtos = $controller->listarProdutos();

include 'view/assets/formulario.php';
include 'view/assets/lista.php';
?>
