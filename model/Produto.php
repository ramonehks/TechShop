<?php
class Produto {
    private $id;
    private $nome;
    private $preco;
    private $descricao;
    private $id_categoria;
    private $id_marca;

    public function __construct($nome, $preco, $descricao, $id_categoria, $id_marca, $id = null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->id_categoria = $id_categoria;
        $this->id_marca = $id_marca;
    }

    public function getId() { return $this->id; }
    public function getNome() { return $this->nome; }
    public function getPreco() { return $this->preco; }
    public function getDescricao() { return $this->descricao; }
    public function getIdCategoria() { return $this->id_categoria; }
    public function getIdMarca() { return $this->id_marca; }
}
