<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <link rel="stylesheet" href="css\localizacao.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localização</title>
</head>
<body onload="getPos()">
    <h1 id="saudacoes"></h1>
    <h1>Colaborador!</h1>
    <p id="relogio"></p>
    <div id="Map" style="height:30vh; width: 30vw;"></div>
    <input type="submit" name="lonLat" id="botaoMapa" onclick="getMap(); esconderBotao(this); mostrarBotao();" value="Mostrar mapa">
    <form action="fotografia.php">
        <input id="botaoAvancar" type="submit" value="Confirmar">
    </form>
</body>
    <script src="OpenLayers.js"></script>
    <script src="javascript/relogio.js"></script>
    <script src="javascript/saudacoes.js"></script>
    <script src="javascript/mapa.js"></script>
    <script src="javascript/localizacao.js"></script>
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
</html>