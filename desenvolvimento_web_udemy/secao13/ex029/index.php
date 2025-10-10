<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array multidimensional</title>
</head>
<body>
    <main>
        <section>
            <h1>Array multidimensional</h1>
            <?php 
                $listas_coisas = [];
                $listas_coisas['frutas'] = 
                [1 => 'banana', 
                2 => 'maçã', 
                3 => 'morango', 
                4 => 'uva'];

                $listas_coisas['pessoas'] = [1 => 'joão', 2 => 'josé', 3 => 'maria'];
                echo "<pre>";
                print_r($listas_coisas);
                echo "</pre>";

                echo '<hr>';
                echo $listas_coisas['frutas'][3];
                echo '<br>';
                echo $listas_coisas['pessoas'][2];


            ?>
        </section>
    </main>
</body>
</html>