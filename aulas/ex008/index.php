<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões aritméticas</title>
</head>
<body>
    <h1>Expressões aritméticas</h1>
    <?php
        /* O php fará primeiro a divisão por conta da ordem de precedência que é um conceito matemático
        Ordem de precedência
        1- É possível modificar a ordem colocando parenteses 
        2- ** Potência
        3- *, /, % multiplicação, divisão e o resto da divisão (módulo). Caso apareça as 3 é feito primeiro a que está mais a esquerda.
        4- -, + Subtração e Soma 
        */ 
        $res = 50 / 2 + 3 ** 2;
        $res2 = 50 / (2+3) ** 2;
        echo "O resultado é $res<br>";
        echo "O resultado é $res2";
    ?>
</body>
</html>