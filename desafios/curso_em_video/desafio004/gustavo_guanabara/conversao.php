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
        <h1>Conversor de Moedas 2.0 - Guanabara</h1>
        <?php
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            
            $reais = $_POST['conversor'] ?? 0;
            $conversao = $reais / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); // Formata como dinheiro de acordo com a região escolhida.

            // Resultado sem internacionalização
            // echo "Seus R$ ". number_format($reais, 2, ',', '.'). " em dolar US$ ". number_format($conversao, 2, ',', '.') . "<br>";

            // Resultado com internacionalização
            // Biblioteca intl (internallization PHP)
            // Não costuma funcionar em servidores locais pois não vem habilitado
            // Para habilitar no windows: pasta xampp -> php -> php.ini -> ctrl + f -> intl -> retire o ponto e virgula (;) -> Dê um stop e depois start o servidor do xampp novamente
            
            echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . "</strong><br>Cotação coletada diretamente do banco central de R$ $cotacao" . "</p>";

        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>