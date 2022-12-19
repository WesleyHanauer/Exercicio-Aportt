<?php
require_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <link rel="stylesheet" href="css/relatorio.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>
<body>
    <h1 id="saudacoes"></h1>
    <h1>Colaborador!</h1>
    <p id="relogio"></p>
    <table>
        <thead>
            <tr>
                <th>Data e hora</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>IP da maquina</th>
                <th>Imagem</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $sql = "SELECT dataHora, latitude, longitude, ipMaquina, imagem FROM dados";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    echo "<td>".$result['dataHora']."</td>";
                    echo "<td>".$result['latitude']."</td>";
                    echo "<td>".$result['longitude']."</td>";
                    echo "<td>".$result['ipMaquina']."</td>";
                    echo "<td><img id='imagemRelatorio' src='".$result['imagem']."'></td>";
                ?>
            </tr>
        </tbody>
    </table>
</body>
<script src="javascript/relogio.js"></script>
<script src="javascript/saudacoes.js"></script>
</html>
<?php