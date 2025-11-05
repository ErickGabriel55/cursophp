<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Parte 2 - While</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <p>No curso foi feito a parte 1 onde falava sobre a parte teórica dos loops por isso essa é a parte 2.</p>
            <h1>Loops Parte 2 - While</h1>
            <?php 
                // A condição (que fica nos parenteses) pode ser feita através dos operadores lógicos/comparação
                $num = 1;
                echo '-- Início do Loop --' . '<br>';
                while($num < 10){
                    $num += 1; // Critério de Parada
                    if($num == 2 || $num == 6){
                        continue;
                    }
                    echo "$num <br>";

                    // if($num > 100){
                    //     break;
                    // }
                }
                echo '-- Fim  do Loop --';
            ?>
        </section>
    </main>
</body>
</html>