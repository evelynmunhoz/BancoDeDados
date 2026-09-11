## Update e Delete 
**UPDATE** ou **DELETE** afetam todas as linhas da sua tabela. Logo, **JAMAIS** executar sem o comando `WHERE`.

```mermaid
flowchart LR 
A[SELECT com o WHERE]-->B {Retornou a linha certa?}
B--SIM-->C [Update ou DELETE]
B--NÃO-->A 
```
##### Criação de um banco de dados 
Comecei com o código no "moba" :
`sudo -u postgres psql` 
`CREATE DATABASE filmes` (não tive um nome muito criativo para a tabela ainda  pode ser que no final eu mude)
`\l` - para visualizar os arquivos e \q para fechar o programa. 


Em seguida, atribui as informações necessárias para a criação do banco de dados:

![alt text](image.png) 

![alt text](<Captura de tela 2026-08-28 085626-1.png>)

Para exibir os 10 filmes melhores avaliados:

![alt text](<Captura de tela 2026-08-21 113155.png>)

Atualizei algumas notas: 

![alt text](<Captura de tela 2026-08-28 090334-1.png>)
 
 E fica assim:

![](<Captura de tela 2026-08-28 081903.png>)

No final, a atividade pede para deletar 5 filmes lançados, ultilizei os códigos:

![alt text](<Captura de tela 2026-08-28 091607.png>)




