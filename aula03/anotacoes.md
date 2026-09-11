## Configurando o SGBD
SGBD: Sistema gerenciador de banco de dados 
Para instalação, utilizamos o comando:

```bash
sudo apt install -y postgresql
```

> No meu servidor, como eu já estava como root, não foi necessário o sudo.

Para acesso inicial, utilizamos o comando:

```bash
sudo -u postgres psql
```
> Autenticação via linux, não necessita de senha, pois você já está autenticado.

Após primeiro acesso, alteramos a senha, através do comando:
```sql
ALTER USER postgres PASSWORD 'docinho' ; 
```

Para sair do SGBD , utilizamos o comando: `\q`.
> Comando famoso \quit em games.

Para acesso externo, utilizamos o comando:
```bash
sudo psql -h 127.0.0.1 -U postgres
```
>Aqui, ele vai necessitar de senha!

---
Alterações nos arquivos:
1. Navegamos até o caminho:
```bash
cd /etc/postgresql/18/main
```
2.Editamos o arquivo postgresql.conf através do comando:
```bash
sudo nano postgresql.conf
```
---
Linha listen_adresses= '*'
>Para pesquisar a linha: `CTRL+W`

3.Segunda alteração no arquivo pg_hba.conf:
```bash
sudo nano pg_hba.conf
```
4.Alterações realizadas:
![alt text](<Captura de tela 2026-08-07 100218.png>)

>O uso de 0.0.0.0 em configurações de programas ou servidores, serve para qualquer dispositivo ter acesso a todas as interfaces de rede disponíveis.

1° comando SQL
- Para criar um novo banco de dados, utilizamos o comando:

```bash
CREATE DATABASE cidades;
```

>O comando `\l` serve para visualizar todos os bancos de dados disponíveis no PostgreSQL.

- Para reiniciar o serviço do PostgreSQL, utiliza-se o comando:

```bash
sudo systemctl restart postgresql
```

Para verificar os status da aplicação utilizamos:

```bash
sudo systemctl status postgresql

```
O comando :
```bash
sudo systemctl rostart portgresql
```
Restarta a aplicação.

> O comando `pg_lsclusters` apresenta todos os clusters (instâncias) do PostgreSQL existentes na máquina, indicando informações como versão, porta utilizada e se cada cluster está ativo (online) ou inativo (offline).
