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
- Validação básica com a library 'form_validation'
- Criação de rotas para os métodos de Movimentação

### Banco de dados MySql

- Criação do banco de dados 
- Criação da tabela de movimentações
- Configuração do application/config/database.php para conectar no banco de dados criado


### Crud de movimentação

#### CREATE

- Criação do model de movimentação, com a função de inserir uma movimentação, com os dados submetidos pelo formulário.
- Usando função date do php com configuração do fuso horário.

#### READ

- Nova função no model 'Movimentacao' para listar os dados da tabela t_transacoes do banco de dados.
- Nova função no controler 'MovimentacaoController' que chama a função do model para listar.
- Nova view para exibir os dados encontrados em uma tabela (html table).
- Criação de uma rota para acessar a lista de movimentações.

#### DELETE

- Nova função no model 'Movimentacao' para deletar os dados da tabela t_transacoes do banco de dados.
- Nova função no controler 'MovimentacaoController' que chama a função do model para deletar.
- Adicionar botão para exclusão.
- Configuração no arquivo autoload.php para uso da função base_url.
- Importar Jquery pela tag 'script'
- Adicionar arquivo jquery para chamar função de exclusão.
- Função que confirma a ação de exclusão.

#### UPDATE

- Criar view para edição dos dados.
- Novas rotas para busca de dados por código e alteraração.
- Novas funções na controller 'MovimentacaoController' para busca por codigo e alterar os dados.
- Nova função no model 'Movimentacao' para buscar e alterar os dados.
- Atulização da view com o novo botão de edição.
- Atulização do autoload.php para evitar chamada de library e helper toda vez que forem necessárias.
- Uso de mensagens flash data da Session para informar status dos transações no banco de dados.

#### Registro de arquivos

- Manipulação e CRUD de arquivos com o auxílio da library 'upload'.
- Criação de uma nova coluna na tabela t_transacoes com o caminho do arquivo salvo.


### Criação de usuário

- Criação da tabela t_usuario
- Criação da controller UsuarioController
- Criação do model Usuario
- Criação da view usuario/registrar_usuario
- Validação básica com a library 'form_validation'
- Rotas para o formulário e cadastro