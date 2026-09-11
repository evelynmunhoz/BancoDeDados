CREATE TABLE produtos (
    id INT GENERATED ALWAYS AS IDENTITY NOT NULL,
    nome VARCHAR(50) NOT NULL,
    preço NUMERIC(10,2) NOT NULL,
    estoque INT NOT NULL DEFAULT 0
);

INSERT INTO produtos (nome, preço, estoque)
VALUES ('chuveiro', '100', '20'); 
