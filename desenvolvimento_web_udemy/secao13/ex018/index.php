<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <link rel="stylesheet" href="../css/reset.css">

</head>
<body>
    <h1>Praticando um pouco mais</h1>
    <?php 
        /* Sintaxe - if(){}, elseif(){}, else{} 
        if é se a condção for verdadeira, elseif é pro caso de uma segunda, ou mais de duas, condições for verdadeira, else se todas as condições forem falsas.
        */
        /*<?= ?>*/
        /* desconto pra quem possuir o cartão da loja e tiver comprando algo acima de R$100,00*/
        $usuario_possui_cartao_loja = true;
        $valor_compra = 255;
        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        if($usuario_possui_cartao_loja && $valor_compra >= 100){
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        }
    ?>

    <h2>Detalhes do pedido</h2>
    <p>Possui cartão da loja?
        <?php
            if($usuario_possui_cartao_loja){
                print 'Sim!!!';
            } else {
                echo 'Não!!!';
            }
        ?>
    </p>
    <p>Valor da Compra: <?= $valor_compra ?></p>

    <p>Recebeu o Desconto no Frete?
        <?php 
            if($recebeu_desconto_frete){
                print 'Sim!!!';
            } else {
                echo 'Não!!!';
            }
        ?>
    </p>

    <p>Valor do Frete: <?= $valor_frete ?></p>
</body>
</html>