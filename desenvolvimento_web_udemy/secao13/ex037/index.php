<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <h1>Foreach</h1>
            <?php 
            $itens = ['sofá', 'mesa', 'cadeira', 'fogão', 'geladeira'];
            echo '<pre>';
            print_r($itens);
            echo '</pre>';

            foreach($itens as $item){
                echo "$item ";
                if ($item == 'mesa'){
                    echo '| Você achou o segredo gigatônico!';
                }
                echo '<br>';
            }
            ?>
        </section>
    </main>
</body>
</html>