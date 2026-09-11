## Análise de dados 

**DROP DATABASE** O comando DROP DATABASE em SQL serve para excluir permanentemente um banco de dados inteiro e todo o seu conteúdo de forma irreversível

**DROP DATABASE IF EXIST** O comando DROP DATABASE IF EXISTS serve para excluir um banco de dados de forma segura, apenas se ele realmente existir no servidor

#### Criaão da tabela kabum :
comando para criar o banco de dados:

![](<Captura de tela 2026-08-28 101113.png>)

atribuição de valores e informações:
![alt text](<Captura de tela 2026-08-28 102246.png>)

Filtro de colunas:
 ```sql 
 SELECT nome, preco FROM protos; AD
 ```

Contagem de produtos:
```sql
SELECT COUNT (*) FROM produtos;
```

Filto de faixas:
```sql
```

Para organizar em oredm do menor para o maior:
```sql 
SELECT nome,preco
FROM produtos
ORDER BY preco 
```
 Em ordem "maior para o menor": 
```sql
SELECT nome,preco
FROM produtos
ORDER BY preco DESC
```

