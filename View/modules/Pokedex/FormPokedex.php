<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pokemons</title>
</head>
<body>
    <form action="/Pokemon/save" method="post">

    <br> <br> <br>

        <div class="box">
            <fieldset>
                <legend>Cadastro de Pokemons</legend>

                <input type="hidden" value="<?= $model->id ?>" name="id" />

                <label for="nome">Nome:</label>
                <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

                <label for="altura">Altura:</label>
                <input id="altura" name="altura" value="<?= $model->altura ?>" type="number" />

                <label for="peso">Peso:</label>
                <input id="peso" name="peso" value="<?= $model->peso ?>" type="number" />

                <label for="habilidades">Habilidades:</label>
                <input id="habilidades" name="habilidades" value="<?= $model->habilidades ?>" type="text" />

                <button type="submit">Enviar</button>

            </fieldset>
        </div>
    </form>    
</body>
</html>