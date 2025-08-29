<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando com operadores de incremento/decremento</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <h1>Praticando com operadores de incremento/decremento</h1> <br>
            <h3>Pós-incremento</h3>
            <?php 
               $a = 7;
               echo "O valor contido na variável \"a\" é: $a <br>";
               echo 'O valor contido na variável "a" após o incremento é: ' . $a++ . ' <br>'; // o php não interpreta $a++ como um incremento de uma variável por isso temos que usar a concatenação de variáveis.
               echo "O valor atualizado é: $a";
            ?>

            <h3>Pré-incremento</h3>
            <?php
               $b = 7;
               echo "O valor contido na variável \"b\" é: $b <br>";
               echo 'O valor contido na variável "b" pré incremento é: ' . ++$b . ' <br>'; // o php não interpreta $a++ como um incremento de uma variável por isso temos que usar a concatenação de variáveis.
               echo "O valor atualizado é: $b";
            ?>

            <h3>Pós-decremento</h3>
            <?php 
               $a = 7;
               echo "O valor contido na variável \"a\" é: $a <br>";
               echo 'O valor contido na variável "a" após o decremento é: ' . $a-- . ' <br>'; // o php não interpreta $a++ como um incremento de uma variável por isso temos que usar a concatenação de variáveis.
               echo "O valor atualizado é: $a";
            ?>

            <h3>Pré-incremento</h3>
            <?php
               $b = 7;
               echo "O valor contido na variável \"b\" é: $b <br>";
               echo 'O valor contido na variável "b" pré decremento é: ' . --$b . ' <br>'; // o php não interpreta $a++ como um incremento de uma variável por isso temos que usar a concatenação de variáveis.
               echo "O valor atualizado é: $b";
            ?>
        </section>
    </main>
</body>
</html>