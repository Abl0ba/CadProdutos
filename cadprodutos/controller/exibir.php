<?php
require_once 'model/Produto.php';

class ProdutoController {
    private $produtos = [];

    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['produtos'])) {
            $_SESSION['produtos'] = [];
        }

        $this->produtos = $_SESSION['produtos'];
    }

    public function adicionarProduto($nome, $preco, $descricao) {
        if (empty($nome) || empty($descricao) || !is_numeric($preco) || $preco <= 0) {
            return "Preencha todos os campos corretamente.";
        }

        $produto = new Produto($nome, $preco, $descricao);
        $this->produtos[] = $produto;
        $_SESSION['produtos'] = $this->produtos;
        return null;
    }

    public function listarProdutos() {
        return $this->produtos;
    }
}
?>
