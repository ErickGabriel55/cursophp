<?php 
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%2707-02-2025%27&@dataFinalCotacao=%2707-09-2025%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    $dados = json_decode(file_get_contents($url), false);
    echo '<pre>';
    echo var_dump($dados);
    echo '</pre>';
    echo $dados->value[0]->cotacaoCompra;
?>