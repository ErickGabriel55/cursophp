<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <h1>Operadores aritméticos</h1>
    <?php 
        $r = "2" + "2"; // Pro php existem operadores diferentes pra adição (+) e pra concatenação (.), diferente do js por exemplo
        echo $r . "<br>"; // por esse motivo o resultado será um int 4.
        var_dump($r); // O php percebe que é uma soma de strings e por isso ele converte pra numero (int ou float)
        /* Operadores Básicos:
        Soma +
        Subtração -
        Multiplicação *
        Divisão real /
        Operadores Adicionais:
        Módulo, Resto da divisão inteira %
        Exponenciação, Potência ** (Só funciona da versão 5.6 em diante)
        */
        
    ?>
</body>
</html>