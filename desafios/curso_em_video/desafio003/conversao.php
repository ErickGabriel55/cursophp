<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Conversor de moedas 1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas 1.0</h1>
        <?php
            $reais = $_POST['conversor'] ?? 0;
            $cotacao = 5.54;
            $conversao = $reais / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); // Formata como dinheiro de acordo com a região escolhida.

            // Resultado sem internacionalização
            // echo "Seus R$ ". number_format($reais, 2, ',', '.'). " em dolar US$ ". number_format($conversao, 2, ',', '.') . "<br>";

            // Resultado com internacionalização
            // Biblioteca intl (internallization PHP)
            // Não costuma funcionar em servidores locais pois não vem habilitado
            // Para habilitar no windows: pasta xampp -> php -> php.ini -> ctrl + f -> intl -> retire o ponto e virgula (;) -> Dê um stop e depois start o servidor do xampp novamente
            
            echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . "</strong><br>Cotação fixa de R$ $cotacao" . "</p>";

        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>