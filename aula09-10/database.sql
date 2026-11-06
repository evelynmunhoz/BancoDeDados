CREATE DATABASE manutencao;

USE manutencao;

CREATE TABLE chamados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    equipamento VARCHAR(100) NOT NULL,
    setor VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    prioridade ENUM('baixa', 'media', 'alta') NOT NULL,
    status ENUM('aberto', 'em andamento', 'concluido')
    NOT NULL DEFAULT 'aberto'
);