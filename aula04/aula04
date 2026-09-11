## Aula 04
Alteração de parâmetros de arquivo de configuração:

**10.87.38.0/24**: Libera todas as faixas da minha rede.

**0.0.0.0/0**: Habilita qualquer IP.

10.87.38.2/**32**: Apenas um endereço

---
Para excluir um banco de dados utilizamos um comando:
```sql
DROP DATABASE cidades;
```
>Cuidado na operação!
---
Primeiro, iniciamos o precesso criando um novo banco de dados:
```sql
CREATE DATABASE loja;
```
**Modelando o primeiro banco de dados**

```mermaid
erDiagram
Produtos {
    int id PK "Gerado automaticamente"; 
    varchar "Armazena o nome do produto";
    numeric preço "Preço do produto em R$";
    int estoque "Armazena a quantidade de produtos no estoque".
}
```
Para criação do banco de dados , utilizamos os seguintes comandos:

```sql
CREATE TABLE produtos(
    id INT GENERATED ALWAYS AS IDENTITY NOT NULL,
    nome VARCHAR(50) NOT NULL,
    preço NUMERIC(10,2) NOT NULL,
    estoque INT NOT NULL DEFAULT 0
); 
```

Para consultar todos os dados da tabela : 
```sql
SELECT * FROM produtos;
```

Para inserir valores na tabela: 
```sql
SELECT * FROM produtos (nome , preço, estoque)
VALUES ('chuveiro', '100','20');

-- SELECT * FROM produtos WHERE nome='Lustre';

-- UPDATE produtos
-- SET preço=5000
-- WHERE nome='Lustre';

-- DELETE FROM produtos 
--HERE nome= 'Cuveiro';

SELECT * FROM produtos WHERE id IN (4,2,5);

 -- SELECT * FROM produtos 
```

