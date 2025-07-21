<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <link rel="stylesheet" href="../css/reset.css">

</head>
<body>
    <h1>Condições Encadea das!</h1>
    <?php 
        /*<?= ?>*/
        /* desconto pra quem possuir o cartão da loja e tiver comprando algo acima de R$100,00*/
        $usuario_possui_cartao_loja = true;
        $valor_compra = 250;
        $valor_frete = 50;
        $recebeu_desconto_frete = true;

        // Inicio das condicionais
        if($usuario_possui_cartao_loja && $valor_compra >= 400){
            $valor_frete = 0;
        } else if($usuario_possui_cartao_loja && $valor_compra >= 300){
            $valor_frete = 10;
        } else if($usuario_possui_cartao_loja && $valor_compra >= 100){
            $valor_frete = 25;
        }else{
            $recebeu_desconto_frete = false;
        }
    ?>

    <h2>Detalhes do pedido</h2>
    <p>Possui cartão da loja? <?= $usuario_possui_cartao_loja ? 'Sim!!!' : 'Não!!!'; ?>
        <?php
            // <condição> ? true : false;
            /*if($usuario_possui_cartao_loja){
                print 'Sim!!!';
            } else {
                echo 'Não!!!';
            }*/
        ?>
    </p>
    <p>Valor da Compra: <?= $valor_compra ?></p>

    <p>Recebeu o Desconto no Frete?
        <?php 
            $teste = $recebeu_desconto_frete ? 'Sim!!!' : 'Não!!!';
            print $teste;
            /*if($recebeu_desconto_frete){
                print 'Sim!!!';
            } else {
                echo 'Não!!!';
            }*/
        ?>
    </p>

    <p>Valor do Frete: <?= $valor_frete ?></p>
</body>
</html>