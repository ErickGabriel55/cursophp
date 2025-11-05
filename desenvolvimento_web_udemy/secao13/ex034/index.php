<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Parte 3 - Do While</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <h1>Loops Parte 3 - Do While</h1>
            <?php 
                $x = 1;
                do {
                    echo "X = $x";
                    $x++;
                    echo '<br>';
                } while ($x < 9);
            ?>
        </section>
    </main>
</body>
</html>