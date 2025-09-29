<?php
$ok= '';
$erro='';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $titulo = trim($_POST['titulo'] ?? '');
    $data = trim($_POST['data'] ?? '');
    $hora = trim($_POST['hora'] ?? '');
    $local = trim($_POST['local'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema </title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div id="bg"> </div>
    <div class="container">
        <header class="topo">
            <h1 class="logo">Eventos Rio Preto</h1>
            <p class="sub">Todos os Eventos em São José do Rio Preto</p>
        </header>

        <section class="grid">
            <div class="card">
                <h2 class="card_titulo"> Cadastrar Atividade </h2>

                <form class="form" method="post" enctype="multipart/form-data">

                    <label for="campo" class="campo">
                        <span> Título </span>
                        <input type="text" name="titulo" id="titulo" require>
                    </label>
                    <div class="dupla">
                        <label for="campo" class="campo">
                            <span>Data</span>
                            <input type="date" name="data" id="data" require>
                        </label>

                        <label for="campo" class="campo">
                            <span>Hora</span>
                            <input type="time" name="hora" id="hora" require>
                        </label>
                    </div>

                    <label for="campo" class="campo">
                        <span>Local</span>
                        <input type="text" name="local" id="local" require>
                    </label>

                    <label class="campo">
                        <span>Descrição</span>
                        <textarea name="descricao" rows="5" require></textarea>
                    </label>

                    <label class="campo">
                        <span>Imagem do evento(opcional)</span>
                        <input type="file" name="imagem" accept=".jpg,.jpeg,.png,.webp">
                    </label>
                    <button type="submit" class="botao_primario">Salvar</button>
                </form>

            </div>
        </section>
    </div>

    <footer class="rodape">
        <div class="container">
            <p>Feito em PHP💟</p>
        </div>
    </footer>
</body>

</html>