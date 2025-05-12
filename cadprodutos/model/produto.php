<?php
class Produto {
    public $nome;
    public $preco;
    public $descricao;

    public function __construct($nome, $preco, $descricao) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
    }
}
?>
