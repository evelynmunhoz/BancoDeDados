### Mostrar os dados das tabelas
```sql
SELECT * FROM alunos;
SELECT * FROM emprestimos;
``` 

### 2 INNER JOIN
```sql
SELECT alunos.nome, emprestimos.livro 
FROM alunos 
INNER JOIN emprestimos ON alunos.id = emprestimos.id_aluno;
```

Os alunos Larissa, Marcos, Natália, Pedro e Sofia não apareceram 
porque não pegaram livros. 


### LEFT JOIN
 ```sql
SELECT alunos.nome, emprestimos.livro 
FROM alunos 
LEFT JOIN emprestimos ON alunos.id = emprestimos.id_aluno;
```

Apareceu NULL no lugar do livro dos alunos que não pegaram nenhum. 


4) Alunos que nunca pegaram livros
```sql
SELECT alunos.nome 
FROM alunos 
LEFT JOIN emprestimos ON alunos.id = emprestimos.id_aluno 
WHERE emprestimos.id IS NULL;
```
 
Larissa, Marcos, Natália, Pedro e Sofia. 


 5) Empréstimo para o aluno 50
 ```sql
INSERT INTO emprestimos (id, livro, id_aluno) 
VALUES (11, 'Turma da Mônica', 50);
```
 
Apareceu um erro porque o aluno 50 não está cadastrado na tabela alunos. 
A chave estrangeira impede o empréstimo para um aluno que não existe, 
quando está ativada. 
