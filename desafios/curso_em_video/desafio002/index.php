<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Aleatorios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section>
            <h1>Trabalhando com números aleatórios</h1>
            
            <?php
                $min = 0;
                $max = 100;
                $aleatorio = mt_rand($min, $max);
                echo 'Gerando um número aleatório entre 0 e 100...<br>';
                echo "O valor gerado foi $aleatorio";
            ?>
            <br> <button onclick="javascript:document.location.reload()">&#x1F504; Gerar</button> 
            
        </section>
    </main>
    
</body>
</html>