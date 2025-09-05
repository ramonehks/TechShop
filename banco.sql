
USE TechShop;

-- Categorias de peças
CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

INSERT INTO categorias (nome) VALUES
('Placa-mãe'),
('Placa de Vídeo'),
('Processador'),
('Memória RAM'),
('SSD'),
('Fonte de Alimentação'),
('Gabinete');

-- Marcas (substitui distribuidor)
CREATE TABLE marcas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

INSERT INTO marcas (nome) VALUES
('ASUS'),
('Gigabyte'),
('MSI'),
('Intel'),
('AMD'),
('Corsair'),
('Kingston'),
('Seagate');

-- Produtos (tabela principal)
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    descricao TEXT NOT NULL,
    id_categoria INT NOT NULL,
    id_marca INT NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categorias(id),
    FOREIGN KEY (id_marca) REFERENCES marcas(id)
);
