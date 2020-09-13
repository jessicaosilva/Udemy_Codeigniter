<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Registre-se</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-6 offset-3">
        <h1>Registre-se</h1>
        <?= validation_errors() ?>
        <?= $this->session->flashdata('usuario') ?>
        <?= form_open(base_url('usuarios/cadastrar'))?>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" maxlength="100" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" maxlength="100" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="text" name="senha" id="senha" maxlength="100" class="form-control" required />
            </div>
            <button class="btn btn-success btn-block">Enviar</button>
            <?= form_close() ?>
        </div>
    </div>
</body>
</html>