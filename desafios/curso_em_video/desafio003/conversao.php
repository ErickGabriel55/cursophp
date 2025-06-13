<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Conversor de moedas 1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Conversor de Moedas 1.0</h1>
    <?php 
        $reais = $_POST['conversor'];
        $cotacao = 5.54;
        $conversao = $reais / $cotacao;
        echo "Seus R$ ". number_format($reais, 2, ',', '.'). " em dolar US$ ". number_format($conversao, 2, ',', '.'). "<br>". "Cotação fixa de R\$ $cotacao";
    ?>
</body>
</html>