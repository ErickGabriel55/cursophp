<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Parte 4 - For</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <h1>Loops Parte 4 - For</h1>
            <?php 
                /*for (variavel; condição; incremento) { 
                    # code...
                }*/
                for ($x = 10; $x > 0; $x--) { 
                    /*if($x == 0){
                        break;
                    }
                    continue;*/
                    echo "$x <br>";
                }
            ?>
        </section>
    </main>
</body>
</html>