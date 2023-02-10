# SQL da tabela 'produto'
Nessa pasta estão comandos SQL para configuração inicial da tabela *produto*.

## Criando a tabela - Create
    CREATE TABLE produto (
        id INT(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        nome VARCHAR(150) NOT NULL,
        preco DECIMAL(5,2) NOT NULL,
        categoria_id INT(10) NOT NULL,
        FOREIGN KEY (categoria_id) REFERENCES categoria(id)
    );
