<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas 2.0</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <section>
            <h1>Conversor de Moedas 2.0</h1>
            <?php 
                $reais = $_POST['conversor']; // coleta o que o usuário enviou através do forms
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%2707-02-2025%27&@dataFinalCotacao=%2707-09-2025%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; // url da api do banco central

                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                $resultado = json_decode(curl_exec($ch), false);
                curl_close($ch);

                $cotacao = $resultado->value[0]->cotacaoCompra;
                /* var_dump($resultado); */
                $conversao = $reais / $cotacao;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . "</strong><br>Cotação de R$" . $cotacao . " retirada do banco central!" . "</p>";
                
                ?>
            <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
        </section>
    </main>
</body>
</html>