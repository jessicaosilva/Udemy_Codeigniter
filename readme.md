## Aprenda Codeigniter do zero ao essencial

### Conceitos e configuração

- Explicando estrutura MVC
- Explicando rotas
- Configurando url amigáveis

Ao criar o arquivo .htaccess, na raiz do projeto rodar o comando:

````
 chmod 755 .htaccess

````

### Movimentação Financeira

- Criação da Controller de Movimentação
- Criação da View de Movimentação
- Validação básicas com a library 'form_validation'
- Criação de rotas para os métodos de Movimentação

### Banco de dados MySql

- Criação do banco de dados 
- Criação da tabela de movimentações
- Configuração do application/config/database.php para conectar no banco de dados criado


### Crud de movimentação

#### CREATE

- Criação do model de movimentação, com a função de inserir uma movimentação, com os dados submetidos pelo formulário.
- Usando função date do php com configuração do fuso horário.

## READ

- Nova função no model 'Movimentacao' para listar os dados da tabela t_transacoes do banco de dados.
- Nova função no controler 'MovimentacaoController' que chama a função do model para listar.
- Nova view para exibir os dados encontrados em uma tabela (html table).
- Criação de uma rota para acessar a lista de movimentações.