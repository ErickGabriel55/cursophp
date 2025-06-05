<!DOCTYPE html>
<html lang="en">
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
                $numero = $_POST['numero'] ?? 0;
                echo "O número escolhido foi <strong>$numero</strong> <br>";
                echo "O seu <em>antecessor</em> é " . ($numero - 1);
                echo "<br>";
                echo "O seu <em>sucessor</em> é " . ($numero + 1);
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
        <!--<p><a href="javascript:history.go(-1)">Voltar</a></p>-->
    </main>

</body>
</html>