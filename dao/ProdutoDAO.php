<?php
require_once "util/Connection.php";
require_once "model/Produto.php";

class ProdutoDAO {
    private $conn;

    public function __construct() {
        $this->conn = Connection::getConnection();
    }

    public function inserir(Produto $produto) {
        $sql = "INSERT INTO produtos (nome, preco, descricao, id_categoria, id_marca) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            $produto->getNome(),
            $produto->getPreco(),
            $produto->getDescricao(),
            $produto->getIdCategoria(),
            $produto->getIdMarca()
        ]);
    }

    public function listar() {
        $sql = "SELECT p.*, c.nome AS categoria, m.nome AS marca 
                FROM produtos p
                JOIN categorias c ON p.id_categoria = c.id
                JOIN marcas m ON p.id_marca = m.id";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function excluir($id) {
        $sql = "DELETE FROM produtos WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }
}
