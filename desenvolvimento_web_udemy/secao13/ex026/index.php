<!DOCTYPE html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
    <main>
        <section>
            <h1>Funções para Manipulação de Strings</h1>
            <?php 
                $texto = "curso completo de php";
                $textoComAcento = "Programar em PHP é como fazer mágica: às vezes funciona e ninguém sabe por quê!";

                echo $texto . "<br><hr>";

                echo strtolower($texto) . "<br>";
                echo mb_strtolower($textoComAcento, 'UTF-8') . "<br><hr>";
                
                echo strtoupper($texto) . "<br><hr>";

                echo ucfirst($texto) . "<br><hr>";

                echo strlen($texto) . "<br><hr>";

                echo str_replace("php", "C#", $texto) . "<br><hr>"; // A função é case sensitive. O texto original não é alterado

                echo substr($texto, 0, 14) . "...<br><hr>";
            ?>
        </section>
    </main>
</body>
</html>