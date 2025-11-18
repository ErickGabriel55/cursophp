<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percorrendo Arrays</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <h1>Percorrendo Arrays</h1>
            <?php 
                $registros = [
                    ['Título' => 'Titulo Notícia 1', 'Conteúdo' => 'Conteúdo Noticia 1'],
                    ['Título' => 'Titulo Notícia 2', 'Conteúdo' => 'Conteúdo Noticia 2'],
                    ['Título' => 'Titulo Notícia 3', 'Conteúdo' => 'Conteúdo Noticia 3'],
                    ['Título' => 'Titulo Notícia 4', 'Conteúdo' => 'Conteúdo Noticia 4'],
                    
                ];
                echo '<pre>';
                print_r($registros);
                echo '</pre>';


                echo '<br>';
                echo 'O array possui: ' . count($registros) . ' registros'; 
                echo '<br>';
                // $idx = 0;
                /*while ($idx < count($registros)) {
                    echo '<h3>' . $registros[$idx]['Título'] . '</h3>';
                    echo '<p>' . $registros[$idx]['Conteúdo'] . '</p>';

                    echo '<hr>';
                    $idx++;
                }*/
                /*do{
                    echo '<h3>' . $registros[$idx]['Título'] . '</h3>';
                    echo '<p>' . $registros[$idx]['Conteúdo'] . '</p>';

                    echo '<hr>';
                    $idx++;
                }while($idx < count($registros))*/

                for($idx = 0; $idx < count($registros); $idx++){
                    echo '<h3>' . $registros[$idx]['Título'] . '</h3>';
                    echo '<p>' . $registros[$idx]['Conteúdo'] . '</p>';

                    echo '<hr>';
                }
            ?>
        </section>
    </main>
</body>
</html>