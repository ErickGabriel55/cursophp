<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessor e antecessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                if (!isset($_POST['numero']) || $_POST['numero'] === ''){
                    echo 'Por favor digite um número!';
                } else{
                    $numero = $_POST['numero'];
                    echo "O número escolhido foi <strong>$numero</strong> <br>";
                    echo "O seu <em>antecessor</em> é " . ($numero - 1);
                    echo "<br>";
                    echo "O seu <em>sucessor</em> é " . ($numero + 1);
                }
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
        <!--<p><a href="javascript:history.go(-1)">Voltar</a></p>-->
    </main>

</body>
</html>