<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting de Tipos</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <header>
        <h1>Conversão de tipos</h1>
    </header>
    <main>
        <section>
            <?php 
                // gettype -> retorna o tipo da variavel
                $valor1 = 20;
                $valor2 = (float) $valor1; // float, double, real (removido)
                echo "O tipo é " . gettype($valor1) . " e o valor é $valor1";
                echo '<br>';
                echo "O tipo é " . gettype($valor2) . " e o valor é $valor2";

            ?>
        </section>
    </main>
    <footer></footer>
</body>
</html>