<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando com foreach</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <h1>Praticando o foreach</h1>
            <?php 
                $funcionarios = [
                    ['nome' => 'João', 'salario' => 2500],
                    ['nome' => 'Maria', 'salario' => 3000],
                    ['nome' => 'Júlia', 'salario' => 3500]
                ];

            echo '<pre>';
            print_r($funcionarios);
            echo '</pre>';

                foreach($funcionarios as $indice => $funcionario){
                    foreach($funcionario as $indice2 => $valor){
                        echo "$indice2 - $valor. <br>";
                    }
                }
                echo '<hr>';
            ?>
        </section>
    </main>
</body>
</html>