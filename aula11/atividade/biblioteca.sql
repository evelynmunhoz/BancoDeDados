CREATE TABLE alunos ( id INTEGER PRIMARY KEY, nome TEXT );

CREATE TABLE emprestimos ( id INTEGER PRIMARY KEY, livro TEXT, id_aluno INTEGER, FOREIGN KEY (id_aluno) REFERENCES alunos(id) );

INSERT INTO alunos VALUES (1, 'Ana'), (2, 'Bruno'), (3, 'Carla'), (4, 'Daniel'), (5, 'Eduarda'), (6, 'Felipe'), (7, 'Gabriela'), (8, 'Henrique'), (9, 'Isabela'), (10, 'João'), (11, 'Larissa'), (12, 'Marcos'), (13, 'Natália'), (14, 'Pedro'), (15, 'Sofia');

INSERT INTO emprestimos (id, livro, id_aluno) VALUES (1, 'Dom Casmurro', 1), (2, 'Harry Potter', 2), (3, 'O Pequeno Príncipe', 3), (4, 'O Hobbit', 4), (5, 'Turma da Mônica', 5), (6, 'Diário de um Banana', 6), (7, 'Alice no País das Maravilhas', 7), (8, 'A Culpa é das Estrelas', 8), (9, 'O Sítio do Picapau Amarelo', 9), (10, 'A Menina que Roubava Livros', 10);

-- 1) Mostrar todos os alunos SELECT * FROM alunos;

-- Mostrar todos os emprestimos SELECT * FROM emprestimos;

-- 2) INNER JOIN SELECT alunos.nome, emprestimos.livro FROM alunos INNER JOIN emprestimos ON alunos.id = emprestimos.id_aluno;

-- 3) LEFT JOIN SELECT alunos.nome, emprestimos.livro FROM alunos LEFT JOIN emprestimos ON alunos.id = emprestimos.id_aluno;

-- 4) Alunos que nunca pegaram livros SELECT alunos.nome FROM alunos LEFT JOIN emprestimos ON alunos.id = emprestimos.id_aluno WHERE emprestimos.id IS NULL;

-- 5) Testar aluno que nao existe PRAGMA foreign_keys = ON;

INSERT INTO emprestimos (id, livro, id_aluno) VALUES (11, 'Turma da Mônica', 50);