<?php
require_once "dao/ProdutoDAO.php";

class ProdutoController {
    private $dao;

    public function __construct() {
        $this->dao = new ProdutoDAO();
    }

    public function inserir($dados) {
        if (empty($dados['nome']) || empty($dados['preco']) || empty($dados['descricao'])) {
            throw new Exception("Preencha todos os campos!");
        }

        $produto = new Produto(
            $dados['nome'],
            $dados['preco'],
            $dados['descricao'],
            $dados['id_categoria'],
            $dados['id_marca']
        );
        $this->dao->inserir($produto);
    }

    public function listar() {
        return $this->dao->listar();
    }

    public function excluir($id) {
        $this->dao->excluir($id);
    }
}
