<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <link rel="stylesheet" href="css/fotografia.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotografia</title>
</head>
<body>
    <h1 id="saudacoes"></h1>
    <h1>Colaborador!</h1>
    <p id="relogio"></p>
    <video id="video"></video>
    <canvas id="canvas"></canvas>
    <button id="capture">Capturar</button>
    <button onclick="salvar(); esconderBotao(this); mostrarBotao();">Salvar</button>

    <form action="insert.php">
        <input id="botaoAvancar" type="submit" value="Continuar">
    </form>
</body>
<script src="javascript/fotografia.js"></script>
<?php
    @$imgData = $_POST['imgData'];
    $caminhoImagem = 'imagens\imagem.png';
    $img = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imgData));
    file_put_contents($caminhoImagem, $img);
    setcookie('caminhoImagem', $caminhoImagem, time() + 60 * 60 * 24 * 365 * 20);
?>
<script>
    var y = document.getElementById("botaoAvancar");
        y.style.display = "none";
        function esconderBotao(x)
        {
            x.style.display = 'none';
        }
        function mostrarBotao() {
            y.style.display = "block";
        }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
<script src="javascript/saudacoes.js"></script>
<script src="javascript/relogio.js"></script>
</html>