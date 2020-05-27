<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <title>Movimentações</title>
</head>
<body>
    <main role="main" class="container">
        <div class="row">
            <div class="col-lg-10 offset-1">
                <h1>Movimentações</h1>
                <br><table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Ações</th>
                            <th>Código</th>
                            <th>Descrição</th>
                            <th>Tipo</th>
                            <th>Valor</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista_movimentacoes as $key_movimentacao => $movimentacao) { ?>
                        <tr>
                            <td>
                                <a href="<?= base_url("movimentacoes/excluir/{$movimentacao->id}"); ?>" class="btn btn-danger btn-excluir">Excluir</a>
                            </td>
                            <td><?= $movimentacao->id ?></td>
                            <td><?= $movimentacao->descricao ?></td>
                            <td><?= ($movimentacao->tipo == 'S') ? "Saída" : "Entrada" ?></td>
                            <td><?= $movimentacao->valor ?></td>
                            <td><?= $movimentacao->data ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </main>
        </div>
    </div>
</body>
<script>
$(function () {
    $('.btn-excluir').click(function (e) {
        e.preventDefault();
        if (confirm("Tem certeza que deseja excluir este registro?")) {
            const href = $(this).attr('href');
            window.location.href = href;
        }
    });
});
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
