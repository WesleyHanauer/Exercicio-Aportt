<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/telaInicial.css">
    <title>Tela inicial</title>
</head>
<body>
    <h1 id="saudacoes"></h1>
    <h1>Colaborador!</h1>
    <p id="relogio"></p>
    <form action="localizacao.php">
        <input type="submit" value="Continuar">
    </form>
</body>
<script src="javascript/saudacoes.js"></script>
<script src="javascript/relogio.js"></script>
</html>
<script>
Intl.DateTimeFormat().resolvedOptions().timeZone = 'Etc/GMT+3';
var date = new Date();

var dataFormatada = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate() + ' ' + date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();

document.cookie = "dataHora="+dataFormatada+"; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
</script>
<?php
$cookies = array();
foreach ($_COOKIE as $name => $value) {
    $cookies[$name] = $value;
}

foreach ($cookies as $name => $value) {
    setcookie($name, "", time() - 3600);
}