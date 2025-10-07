<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Básico</title>
</head>
<body>
    <main>
        <section>
            <?php 
                // Arrays sequencias/numericos
                /* $listas_frutas = ['Banana', 'Maçã', 'Pera', 'Maracujá', 'Goiaba'];
                $listas_frutas[] = 'Abacaxi';
                var_dump($listas_frutas);
                echo "<pre>";
                print_r($listas_frutas);
                echo "</pre>";
                $listas_frutas_convertido = implode(", ", $listas_frutas);
                echo "<br>";
                echo $listas_frutas_convertido;
                print $listas_frutas[3]; */

                // Arrays Associativos
                // Inicio do Array
                $listas_frutas = [
                    'a' => 55,
                    'b' => 'Maçã',
                    'x' => 'Morango',
                    'z' => 'Uva',
                    2 => 'Abacate',
                    '2' => 'pera',
                    'Vazio' => NULL];
                // Fim do array
                $listas_frutas['w'] = 'Abacaxi';
                var_dump($listas_frutas);
                echo $listas_frutas['a'];

            ?>
        </section>
    </main>
</body>
</html>