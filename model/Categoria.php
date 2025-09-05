<?php
class Categoria {
    private $id;
    private $nome;

    public function __construct($nome, $id = null) {
        $this->id = $id;
        $this->nome = $nome;
    }

    public function getId() { return $this->id; }
    public function getNome() { return $this->nome; }
}
