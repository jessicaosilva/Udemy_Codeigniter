<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Nova movimentação</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
            <?= validation_errors(); ?>
            <?= $this->session->flashdata('cadastro-movimentacao'); ?>
                <form action="cadastrar" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <h2>Editar movimentação</h2>
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <input class="form-control" name="descricao"/>
                    </div>
                    <div class="form-group">
                        <label>Valor</label>
                        <input class="form-control" name="valor"/>
                    </div>
                    <div class="form-group">
                        <label>Tipo</label>
                        <input class="form-control" name="tipo"/>
                    </div>
                    <div class="form-group">
                        <label>Data</label>
                        <input class="form-control" name="data"/>
                    </div>
                    <div class="form-group">
                        <label>Comprovante</label>
                        <input type="file" class="form-control" name="comprovante"/><br>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control" class="btn btn-default" value="enviar"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
